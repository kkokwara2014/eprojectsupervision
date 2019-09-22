<?php

namespace App\Http\Controllers;

use App\Classlevel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\User;

class ClasslevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $classlevels = Classlevel::orderBy('created_at', 'asc')->get();
        return view('admin.classlevel.index', compact('classlevels', 'user'));
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
            'levelname' => 'required|string',
        ]);

        Classlevel::create($request->all());

        return redirect()->route('classlevel.index');
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
        $user=Auth::user();
        $classlevels = Classlevel::where('id', $id)->first();

        return view('admin.classlevel.edit', compact('classlevels','user'));
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
        $classlevels = Classlevel::where('id', $id)->delete();
        return back();
    }
}
