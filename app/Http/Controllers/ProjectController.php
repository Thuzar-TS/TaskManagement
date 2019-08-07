<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use DB;
use Datatable;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = new Project();
        $projects = $projects->paginate(5);
        // $projects = Project::all()->paginate(5);
        return view('Projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required|unique:posts|max:255',
        //     'description' => 'required',
        // ]);
      
        $user = auth()->user();
        $id = $user->id;
        $created_at = $user ->created_at;
        $updated_at = $user->updated_at;
        $name=$request->input('name');
        $description=$request->input('description');
        $data=array("name" => $name,"description" => $description,"user_id"=>$id,"created_at"=>$created_at,"updated_at"=>$updated_at);
        DB::table('projects')->insert($data);
        return redirect('/projects')->with('success', 'Contact Saved!');
       
    }

    public function getData()
    {
        $project = Project::select('id','name','description','created_at','updated_at')->get();
        return datatables()->of($project)
        ->addColumn('action', function ($project) {
                return '<a href="project/'.$project->id.'" class="btn btn-sm btn-primary">Edit</a>';
            })
        ->addColumn('delete', function ($project) {
                return '<a type="submit" class="button btn btn-warning btn-sm" data-remove="delete/'.$project->id.'">Delete</a>';
           })

        ->rawColumns(['delete' => 'delete','action' => 'action'])
        ->make(true);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recorddetails = Project::Find($id);

        return view('Projects.show', compact('recorddetails'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pro = Project::find($id);

        return view('Projects.edit', compact('pro'));
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
        $data = Project::find($id);
        $uid = Auth()->user()->id;
        $udate = Auth()->user()->updated_at;
        $data->name = $request->get('name');
        echo 'alert($data)';
        $data->description = $request->get('description');
        $data->user_id = $uid;
        $data->updated_at = $udate;
       
        $data->save();

       return redirect('/projects')->with('success', 'Contact Updated! ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Project::find($id);
        $data->delete();
   
        return redirect('/projects')->with('success', 'Contact Deleted!');
    }
}
