<?php

namespace App\Http\Controllers;

use App\Department;
use App\User;
use Auth;
use Illuminate\Http\Request;

class ProjectCoordinatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $projectcoordinators = User::where('role_id', '2')->orderBy('created_at', 'desc')->get();
        $departments = Department::orderBy('name', 'asc')->get();

        return view('admin.projectcoord.index', compact('user', 'projectcoordinators', 'departments'));
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
            'lastname' => 'required|string',
            'firstname' => 'required|string',
            'identitynumber' => 'required|string|unique:users',
            'gender' => 'required|string',
            'phone' => 'required|integer',
            'department_id' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'password' => 'required|string|min:6|confirmed',

        ]);

        $user = new User;

        $user->lastname = $request->lastname;
        $user->firstname = $request->firstname;
        $user->othername = $request->othername;
        $user->identitynumber = $request->identitynumber;
        $user->gender = $request->gender;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->department_id = $request->department_id;
        $user->role_id = $request->role_id;
        $user->isactive = $request->isactive;

        $user->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $supervisor = User::find($id);
        $supervisor_projects = User::find($id)->allocations;
        return view('admin.projectcoord.show', array('user' => Auth::user()), compact('supervisor', 'supervisor_projects'));
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
