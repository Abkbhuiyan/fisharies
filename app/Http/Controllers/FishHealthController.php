<?php

namespace App\Http\Controllers;

use App\FishHealth;
use App\ProjectTank;
use Illuminate\Http\Request;

class FishHealthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['fishHealts'] = FishHealth::with('projectTank')->get();
        return view('admin.fishHealth.fishHealthInfo',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['projectTanks'] = ProjectTank::with('project')->with('tank')->get();
        return view('admin.fishHealth.addFishHealth',$data);
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
           'project_tank_id' => 'required',
           'fish_amount' => 'required',
           'weight' => 'required',
        ]);

        $fishHealth = new FishHealth();
        $fishHealth->date = $request->date;
        $fishHealth->project_tank_id = $request->project_tank_id;
        $fishHealth->fish_amount = $request->fish_amount;
        $fishHealth->weight = $request->weight;
        $fishHealth->save();
        return  redirect()->route('fishHealth.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FishHealth  $fishHealth
     * @return \Illuminate\Http\Response
     */
    public function show(FishHealth $fishHealth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FishHealth  $fishHealth
     * @return \Illuminate\Http\Response
     */
    public function edit(FishHealth $fishHealth)
    {
        $data['projectTanks'] = ProjectTank::with('project')->with('tank')->get();
        $data['fishHealth'] = $fishHealth;
        return view('admin.fishHealth.editFishHealth',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FishHealth  $fishHealth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'date' => 'required',
            'project_tank_id' => 'required',
            'fish_amount' => 'required',
            'weight' => 'required',
        ]);

        $fishHealth = FishHealth::findOrFail($id);
        $fishHealth->date = $request->date;
        $fishHealth->project_tank_id = $request->project_tank_id;
        $fishHealth->fish_amount = $request->fish_amount;
        $fishHealth->weight = $request->weight;
        $fishHealth->save();
        return  redirect()->route('fishHealth.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FishHealth  $fishHealth
     * @return \Illuminate\Http\Response
     */
    public function destroy(FishHealth $fishHealth)
    {
        $fishHealth->delete();
        return  redirect()->route('fishHealth.index');
    }
}
