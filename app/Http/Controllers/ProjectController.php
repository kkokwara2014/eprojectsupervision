<?php

namespace App\Http\Controllers;

use App\Allocation;
use App\Classlevel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Project;
use Auth;
use App\User;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $projects = Project::orderBy('created_at', 'desc')->get();
        $classlevels = Classlevel::orderBy('created_at', 'asc')->get();
        $supervisors = User::where('role_id', '3')->get();
        $projforassign = Project::orderBy('title', 'asc')->get();

        return view('admin.project.index', compact('projects', 'projforassign', 'supervisors', 'user', 'classlevels'));
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
        $this->validate($request, [
            'title' => 'required|string',
            'user_id' => 'required',
            'projyear' => 'required',
            'classlevel_id' => 'required',
        ]);

        Project::create($request->all());

        return redirect(route('project.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $student_project = Project::find($id);
        $project_chapters = Project::find($id);
        $project_allocations = User::find($id)->allocations;
        // $project_supervisor=Allocation::find($id)->user;
        $project_supervisor=Project::find($id)->allocations;
        return view('admin.project.show', array('user' => Auth::user()), compact('project_chapters','project_allocations','project_supervisor'));
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
