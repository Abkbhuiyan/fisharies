<?php

namespace App\Http\Controllers;

use App\Fish;
use App\Project;
use App\ProjectTank;
use App\Tank;
use App\User;
use Illuminate\Http\Request;

class ProjectTankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['projectTanks'] = ProjectTank::with(['project','tank','fish'])->get();
        //dd($data['projectUsers']);
        return view('admin.projectTank.projectTankInfo',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['projects'] = Project::all();
        $data['tanks'] = Tank::all();
        $data['fishes'] = Fish::all();

        return view('admin.projectTank.addProjectTank',$data);

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
            'project_id' => 'required',
            'tank_id' => 'required',
            'fish_id' => 'required',
            'fish_quantity' => 'required',
        ]);

        $pu = new ProjectTank();
        $pu->project_id = $request->project_id;
        $pu->tank_id = $request->tank_id;
        $pu->fish_id = $request->fish_id;
        $pu->fish_quantity = $request->fish_quantity;
        $pu->save();

        return redirect()->route('projectTank.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProjectTank  $projectTank
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectTank $projectTank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProjectTank  $projectTank
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectTank $projectTank)
    {
        $data['projects'] = Project::all();
        $data['tanks'] = Tank::all();
        $data['fishes'] = Fish::all();
        $data['projectTank'] = $projectTank;

        return view('admin.projectTank.editProjectTank',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProjectTank  $projectTank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        dd($id);
        $request->validate([
            'project_id' => 'required',
            'tank_id' => 'required',
            'fish_id' => 'required',
            'fish_quantity' => 'required',
        ]);

        $pu = ProjectTank::findOrFail($id);
        $pu->project_id = $request->project_id;
        $pu->tank_id = $request->tank_id;
        $pu->fish_id = $request->fish_id;
        $pu->fish_quantity = $request->fish_quantity;
        $pu->save();

        return redirect()->route('projectTank.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProjectTank  $projectTank
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectTank $projectTank)
    {
        $projectTank->delete();

        return redirect()->route('projectTank.index');
    }
}
