<?php

namespace App\Http\Controllers;

use App\Allocation;
use App\Chapter;
use Illuminate\Http\Request;

use Auth;
use App\User;
use App\Department;
use App\Project;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $students = User::where('role_id', '4')->orderBy('created_at', 'desc')->get();
        $departments = Department::orderBy('name', 'asc')->get();

        return view('admin.student.index', compact('user', 'students', 'departments'));
    }

    public function activate($id)
    {
        $student = User::find($id);
        $student->isactive = '1';
        $student->save();

        return redirect(route('student.index'));
    }
    public function deactivate($id)
    {

        $student = User::find($id);
        $student->isactive = '0';
        $student->save();

        return redirect(route('student.index'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = User::find($id);
        $student_project = Project::where('user_id',$id)->get();
        $project_chapters = Chapter::where('project_id',$id)->get();
        $project_supervisor = Allocation::where('project_id', $id)->get();

        return view('admin.student.show', array('user' => Auth::user()), compact('student', 'student_project', 'project_chapters', 'project_supervisor'));
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
