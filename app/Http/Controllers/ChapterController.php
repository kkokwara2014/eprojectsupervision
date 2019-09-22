<?php

namespace App\Http\Controllers;

use App\Chapter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Project;
use Auth;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $chapters = Chapter::orderBy('created_at', 'asc')->get();
        $projects = Project::orderBy('created_at', 'asc')->get();
        return view('admin.chapter.index', compact('chapters','projects', 'user'));
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
        $formInput=$request->except('filename');
        $this->validate($request,[
            'title'=>'required|string',
            'filename'=>'required|mimes:doc,docx|max:5000',
        ]);

        if ($request->hasFile('filename')) {
            $filename=$request->file('filename');
            $filenameName=time().'.'.$filename->getClientOriginalExtension();
            // filename::make($filename)->resize(300,300)->save(public_path('product_filenames/'.$filenameName));

            $formInput['filename']=$filenameName;
        }

        $chapter=new Chapter;
        $chapter->name=$request->name;
        $chapter->filename=$formInput['filename'];

        $chapter->save();

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
