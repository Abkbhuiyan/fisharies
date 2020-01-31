<?php

namespace App\Http\Controllers;

use App\BuyHistory;
use App\Project;
use Illuminate\Http\Request;

class BuyHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['buyHistory'] = BuyHistory::all();
        return view('admin.buy.buyList',$data);
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
        return view('admin.buy.addBuy',$data);
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
           'name' => 'required',
           'type' => 'required',
           'price' => 'required',
           'project_id' => 'required',
           'supplier' => 'required',
        ]);

        $bh = new BuyHistory();
        $bh->name = $request->name;
        $bh->type = $request->type;
        $bh->price = $request->price;
        $bh->project_id = $request->project_id;
        $bh->supplier = $request->supplier;
        $bh->save();

        return redirect()->route('buy.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['projects'] = Project::all();
        $data['buy_history'] = BuyHistory::findOrFail($id);
        return view('admin.buy.editBuy',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'price' => 'required',
            'supplier' => 'required',
            'project_id' => 'required',
        ]);

        $bh =  BuyHistory::findOrFail($id);
        $bh->name = $request->name;
        $bh->type = $request->type;
        $bh->price = $request->price;
        $bh->supplier = $request->supplier;
        $bh->project_id = $request->project_id;
        $bh->save();

        return redirect()->route('buy.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buyHistory = BuyHistory::findOrfail($id);
         $buyHistory->delete();
        return redirect()->route('buy.index');

    }
}
