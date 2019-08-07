<?php

namespace App\Http\Controllers\profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Support\Facades\Input;
use Validator;
use Auth;
use Redirect;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.index');
    }

    public function getData()
    {
        $profile = Profile::select('id','user_id','photo_url','address','phone','git','skype','created_at','updated_at')->get();
        return datatables()->of($profile)
       
        ->editColumn('image', function ($profile) {
            $url = url("images/".$profile->photo_url);   
                return '<img src="'. $url .'" border="0" width="40" class="img-rounded" align="center" />'; 
            })
        ->addColumn('view', function ($profile) {
                return '<a class="button btn btn-info btn-sm" href="profile/'.$profile->id.'">View</a>';
           })
        ->addColumn('edit', function ($profile) {
                return '<a class="button btn btn-info btn-sm" href="profile/'.$profile->id.'/edit">Edit</a>';
           })
        ->addColumn('delete', function ($profile) {
            return '<a href="profile/delete/'.$profile->id.'" class="button btn btn-warning btn-sm">Delete</a>';
           })
        ->rawColumns(['delete' => 'delete','edit' => 'edit','image'=>'image','view'=>'view'])
        ->make(true);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.create');
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
            'photo_url'   =>  'required|image|max:2048',
            'address'     =>  'required',
            'phone'       =>  'required|numeric|digits:11',
            'git'         =>  'required',
            'skype'       =>  'required',
            
        ]);

        $image = $request->file('photo_url');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $userid = Auth::user()->id;
        $form_data = array(
            'user_id'         =>   $userid,
            'photo_url'       =>   $new_name,
            'address'         =>   $request->address,
            'phone'           =>   $request->phone,
            'git'             =>   $request->git,
            'skype'           =>   $request->skype
        );  
        Profile::create($form_data);
        return redirect()->back()->with('success', 'Data Save');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Profile::findOrFail($id);
        return view('profile.view',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Profile::findOrFail($id);
        return view('profile.edit',compact('data','id'));
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
    
         if(empty($request->photo_url)){
             
            $request->validate([
                'address'     =>  'required',
                'phone'       =>  'required|numeric',
                'git'         =>  'required',
                'skype'       =>  'required',
                
            ]);

            $userid = Auth::user()->id;
            $form_data = array(
                'user_id'         =>   $userid,
                'address'         =>   $request->address,
                'phone'           =>   $request->phone,
                'git'             =>   $request->git,
                'skype'           =>   $request->skype
            );  
          Profile::whereId($id)->update($form_data);
         }else{
            $request->validate([
                'photo_url'   =>  'required|image|max:2048',
                'address'     =>  'required',
                'phone'       =>  'required|numeric',
                'git'         =>  'required',
                'skype'       =>  'required',
                
            ]);
    
            $image = $request->file('photo_url');
    
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $new_name);
            $userid = Auth::user()->id;
            $form_data = array(
                'user_id'         =>   $userid,
                'photo_url'       =>   $new_name,
                'address'         =>   $request->address,
                'phone'           =>   $request->phone,
                'git'             =>   $request->git,
                'skype'           =>   $request->skype
            );
            Profile::whereId($id)->update($form_data);  
         }
         
        // return $form_data;
        return redirect('profile')->with('success', 'Data Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $data = Profile::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('delete', 'Data Delete');

    }
}
