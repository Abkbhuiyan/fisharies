<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectUser;
use App\User;
use Illuminate\Http\Request;

class ProjectUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['projectUsers'] = ProjectUser::with('users')->with('projects')->get();
        //dd($data['projectUsers']);

        return view('admin.projectUser.projectUserInfo',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['projects'] = Project::all();
        $data['users'] = User::all();

        return view('admin.projectUser.addProjectUser',$data);
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
            'user_id' => 'required',
            'responsibilities' => 'required',
        ]);

        $pu = new ProjectUser();
        $pu->project_id = $request->project_id;
        $pu->user_id = $request->user_id;
        $pu->responsibilities = $request->responsibilities;
        $pu->save();

        return redirect()->route('projectUser.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProjectUser  $projectUser
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectUser $projectUser)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProjectUser  $projectUser
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectUser $projectUser)
    {
        $data['projects'] = Project::all();
        $data['users'] = User::all();
        $data['projectUser'] = $projectUser;

        return view('admin.projectUser.editProjectUser',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProjectUser  $projectUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        dd($id);
        $request->validate([
            'project_id' => 'required',
            'user_id' => 'required',
            'responsibilities' => 'required',
        ]);

        $pu =  ProjectUser::findOrFail($id);
        $pu->project_id = $request->project_id;
        $pu->user_id = $request->user_id;
        $pu->responsibilities = $request->responsibilities;
//        dd($pu);
        $pu->save();

        return redirect()->route('projectUser.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProjectUser  $projectUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectUser $projectUser)
    {
        $projectUser->delete();
        return redirect()->route('projectUser.index');
    }
}
