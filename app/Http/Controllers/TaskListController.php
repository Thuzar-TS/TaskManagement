<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaskList;

class TaskListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $tasklist = TaskList::all();

        return view('tasklist.index',compact('tasklist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasklist.create');
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
            'project_id'  => 'required',
            'task_id' => 'required',

        ]);

        TaskList::create($request->except('_token'));

        return redirect()->route('tasklist.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tasklist=TaskList::findOrfail($id);
        return view('tasklist.show',compact('tasklist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tasklist=TaskList::findOrfail($id);
        return view('tasklist.edit',compact('tasklist'));
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
        $request->validate([
            'name' => 'required',
            'project_id'  => 'required',
            'task_id' => 'required',
          

        ]);

        $task = TaskList::find($id); 

        $task->name = $request->name;
        $task->project_id = $request->project_id;
        $task->task_id = $request->task_id;
        
        $task->save();

    
        return redirect()->route('tasklist.index')->with('success','Project successsful updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        {
            $tasklist = TaskList::findOrfail($id);
            $tasklist -> delete();
            return redirect()->route('tasklist.index')->with('success','tasklist successsfully Deleted');
        }
    }
}
