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
        
        $this->validate($request,[
            'title'=>'required|string',
            'project_id'=>'required',
            'filename'=>'required|file|mimes:doc,docx|max:5000',
        ]);

        if ($request->hasFile('filename')) {
            $filenameWithTime = time() . '_' .$request->title.'.'. $request->filename->getClientOriginalExtension();
            $filenameToStore = $request->filename->storeAs('public/project_files', $filenameWithTime);
           
        }

        $chapter=new Chapter;
        $chapter->title=$request->title;
        $chapter->project_id=$request->project_id;
        $chapter->filename=$filenameToStore;

        $chapter->save();

        return redirect(route('chapter.index'));

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
