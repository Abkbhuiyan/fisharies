<?php

namespace App\Http\Controllers;

use App\Tank;
use Illuminate\Http\Request;

class TankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['tanks'] = Tank::all();
        return view('admin.tank.tankInfo',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tank.addtank');
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
           'size' => 'required',
           'oxygen_pump' => 'required',
           'water_pump' => 'required',
           'max_fish_quantity' => 'required',
        ]);

        $tank = new Tank();
        $tank->name = $request->name;
        $tank->size = $request->size;
        $tank->water_pump = $request->water_pump;
        $tank->oxygen_pump = $request->oxygen_pump;
        $tank->max_fish_quantity = $request->max_fish_quantity;
        $tank->save();
        return  redirect()->route('tank.index');
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
    public function edit(Tank $tank)
    {
//        dd($tank);
        return view('admin.tank.editTank',['tank'=>$tank]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tank $tank)
    {
        $request->validate([
            'name' => 'required',
            'size' => 'required',
            'oxygen_pump' => 'required',
            'water_pump' => 'required',
            'max_fish_quantity' => 'required',
        ]);

      //  $tank = new Tank();
        $tank->name = $request->name;
        $tank->size = $request->size;
        $tank->water_pump = $request->water_pump;
        $tank->oxygen_pump = $request->oxygen_pump;
        $tank->max_fish_quantity = $request->max_fish_quantity;
        $tank->save();
        return  redirect()->route('tank.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tank $tank)
    {
        $tank->delete();
        return redirect()->route('tank.index');
    }
}
