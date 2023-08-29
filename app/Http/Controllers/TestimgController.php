<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\profileinfo;
use Illuminate\Support\Facades\DB;
class TestimgController extends Controller
{
    
    public function index()
    {
        return view('testimg-upload');
    }

    public function indexdash()
    {
        $profileinfos = profileinfo::all();
        return view('dashboard', compact('profileinfos'));
    }

    public function dashboard()
{
    $profileinfoData = Profileinfo::all(); 
    return view('layouts.app', compact('profileinfoData'));
}

    public function store1(Request $request)
{
    // $this->validate($request, [
    //     'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    // ]);


    $image1_path = $request->file('image1')->store('image', 'public');
    $image1_path_new = explode('/', $image1_path);
    $image2_path = $request->file('image2')->store('image', 'public');
    $image2_path_new = explode('/', $image2_path);
    $image3_path = $request->file('image3')->store('image', 'public');
    $image3_path_new = explode('/', $image3_path);
    $image4_path = $request->file('image4')->store('image', 'public');
    $image4_path_new = explode('/', $image4_path);
    $image5_path = $request->file('image5')->store('image', 'public');
    $image5_path_new = explode('/', $image5_path);
    $image6_path = $request->file('image6')->store('image', 'public');
    $image6_path_new = explode('/', $image6_path);

    $profdata= new profileinfo();
    $profdata->image1 = $image1_path_new[1];
    $profdata->projname1= $request['projname1'];
    $profdata->projdescription1= $request['projdescription1'];
    $profdata->image2 = $image2_path_new[1];
    $profdata->projname2= $request['projname2'];
    $profdata->projdescription2= $request['projdescription2'];
    $profdata->image3 = $image3_path_new[1];
    $profdata->projname3= $request['projname3'];
    $profdata->projdescription3= $request['projdescription3'];
    $profdata->image4 = $image4_path_new[1];
    $profdata->projname4= $request['projname4'];
    $profdata->projdescription4= $request['projdescription4'];
    $profdata->image5 = $image5_path_new[1];
    $profdata->projname5= $request['projname5'];
    $profdata->projdescription5= $request['projdescription5'];
    $profdata->image6 = $image6_path_new[1];
    $profdata->projname6= $request['projname6'];
    $profdata->projdescription6= $request['projdescription6'];

    $profdata->save();
    return redirect('/dashboard')->with('status', 'Form submitted successfully');

        }}