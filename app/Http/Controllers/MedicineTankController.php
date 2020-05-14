<?php

namespace App\Http\Controllers;

use App\Medicine;
use App\MedicineTank;
use App\Tank;
use App\Project;
use Illuminate\Http\Request;

class MedicineTankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['medicineTanks'] = MedicineTank::all();
        return view('admin.medicineTank.medicineTankInfo',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['tanks'] = Tank::all();
        $data['medicines'] = Medicine::all();
        $data['projects'] = Project::all();

        return view('admin.medicineTank.addMedicineTank',$data);
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
           'medicine_id' => 'required',
           'quantity' => 'required',
           'project_id' => 'required',
        ]);

        $medicineTank = new MedicineTank();
        $medicineTank->tank_id = $request->tank_id;
        $medicineTank->medicine_id = $request->medicine_id;
        $medicineTank->quantity = $request->quantity;
        $medicineTank->proejct_id = $request->proejct_id;
        $medicineTank->save();

        return redirect()->route('medicineTank.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MedicineTank  $medicineTank
     * @return \Illuminate\Http\Response
     */
    public function show(MedicineTank $medicineTank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MedicineTank  $medicineTank
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicineTank $medicineTank)
    {
        $data['tanks'] = Tank::all();
        $data['medicines'] = Medicine::all();
        $data['projects'] = Project::all();
        $data['medicineTank'] = $medicineTank;

        return view('admin.medicineTank.editMedicineTank',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MedicineTank  $medicineTank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tank_id' => 'required',
            'medicine_id' => 'required',
            'quantity' => 'required',
            'project_id' => 'required',
        ]);

        $medicineTank = MedicineTank::findOrFail($id);
        $medicineTank->tank_id = $request->tank_id;
        $medicineTank->medicine_id = $request->medicine_id;
        $medicineTank->quantity = $request->quantity;
        $medicineTank->project_id = $request->project_id;
        $medicineTank->save();

        return redirect()->route('medicineTank.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MedicineTank  $medicineTank
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicineTank $medicineTank)
    {
        $medicineTank->delete();

        return redirect()->route('medicineTank.index');
    }
}
