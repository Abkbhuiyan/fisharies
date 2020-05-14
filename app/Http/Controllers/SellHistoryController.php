<?php

namespace App\Http\Controllers;

use App\Project;
use App\SellHistory;
use Illuminate\Http\Request;

class SellHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['sellHistory'] = SellHistory::with('project')->orderBy('project_id','desc')->get();
        return view('admin.sell.sellList',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['projects'] = Project::all();
//        dd($data);
        return view('admin.sell.addSell',$data);
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
            'date' => 'required',
            'weight' => 'required|numeric',
            'unit_price' => 'required|numeric',
            'project_id' => 'required',
        ]);

        $bh = new SellHistory();
        $bh->date = $request->date;
        $bh->weight = $request->weight;
        $bh->unit_price = $request->unit_price;
        $bh->project_id = $request->project_id;
        $bh->save();

        return redirect()->route('sellHistory.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SellHistory  $sellHistory
     * @return \Illuminate\Http\Response
     */
    public function show(SellHistory $sellHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SellHistory  $sellHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(SellHistory $sellHistory)
    {
        $data['projects'] = Project::all();
        $data['sellHistory'] = $sellHistory;
        return view('admin.sell.editSell',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SellHistory  $sellHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SellHistory $sellHistory)
    {
        $request->validate([
            'date' => 'required',
            'weight' => 'required|numeric',
            'unit_price' => 'required|numeric',
            'project_id' => 'required',
        ]);

//        $bh = new SellHistory();
        $sellHistory->date = $request->date;
        $sellHistory->weight = $request->weight;
        $sellHistory->unit_price = $request->unit_price;
        $sellHistory->project_id = $request->project_id;
        $sellHistory->save();

        return redirect()->route('sellHistory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SellHistory  $sellHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SellHistory $sellHistory)
    {
        $sellHistory->delete();
        return redirect()->back();
    }
}
