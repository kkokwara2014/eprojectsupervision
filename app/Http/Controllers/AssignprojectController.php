<?php

namespace App\Http\Controllers;

use App\Project;
use App\Project_user;
use Illuminate\Http\Request;

use Auth;
use App\User;

class AssignprojectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $supervisors = User::where('role_id', '3')->get();
        $projects = Project::orderBy('title', 'asc')->get();

        return view('admin.assignproject.index', compact('user', 'supervisors', 'projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'project_id'=>'required',
            'user_id'=>'required',
        ]);

        // $proj_sup=new Project_user;
        // $proj_sup->project_id=$request->project_id;
        // $proj_sup->user_id=$request->supervisor_id;
        // $proj_sup->save();

        Project_user::create($request->all());

        return view('admin.project.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
