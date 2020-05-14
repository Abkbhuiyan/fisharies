<?php

namespace App\Http\Controllers;

use App\Feed;
use App\FeedTank;
use App\Tank;
use App\Project;
use Illuminate\Http\Request;

class FeedTankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['feedTanks'] = FeedTank::all();
        return view('admin.feedTank.feedTankInfo',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['tanks'] = Tank::all();
        $data['feeds'] = Feed::all();
        $data['projects'] = Project::all();

        return view('admin.feedTank.addFeedTank',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tank_id' => 'required',
            'feed_id' => 'required',
            'quantity' => 'required',
            'project_id' => 'required',
        ]);

        $feedTank = new FeedTank();
        $feedTank->tank_id = $request->tank_id;
        $feedTank->feed_id = $request->feed_id;
        $feedTank->quantity = $request->quantity;
        $feedTank->project_id = $request->project_id;
        $feedTank->save();

        return redirect()->route('feedTank.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FeedTank  $feedTank
     * @return \Illuminate\Http\Response
     */
    public function show(FeedTank $feedTank)
    {

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FeedTank  $feedTank
     * @return \Illuminate\Http\Response
     */
    public function edit(FeedTank $feedTank)
    {
        $data['tanks'] = Tank::all();
        $data['feeds'] = Feed::all();
        $data['projects'] = Project::all();
        $data['feedTank'] = $feedTank;

        return view('admin.feedTank.editFeedTank',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FeedTank  $feedTank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeedTank $feedTank)
    {
        $request->validate([
            'tank_id' => 'required',
            'feed_id' => 'required',
            'quantity' => 'required',
            'project_id' => 'required',
        ]);

        //$feedTank = new FeedTank();
        $feedTank->tank_id = $request->tank_id;
        $feedTank->feed_id = $request->feed_id;
        $feedTank->quantity = $request->quantity;
        $feedTank->proejct_id = $request->project_id;
        $feedTank->save();

        return redirect()->route('feedTank.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FeedTank  $feedTank
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeedTank $feedTank)
    {
        $feedTank->delete();
        return redirect()->route('feedTank.index');
    }
}
