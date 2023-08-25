<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\testimg;
use Illuminate\Support\Facades\DB;
class TestimgController extends Controller
{
    
    public function index()
    {
        return view('testimg-upload');
    }

    public function indexdash()
    {
        $testimg = testimg::all();
        return view('dash', compact('testimg'));
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

    $imgdata= new testimg();
    $imgdata->image1 = $image1_path_new[1];
    $imgdata->image2 = $image2_path_new[1];
    $imgdata->image3 = $image3_path_new[1];
    $imgdata->image4 = $image4_path_new[1];
    $imgdata->image5 = $image5_path_new[1];
    $imgdata->image6 = $image6_path_new[1];

    $imgdata->save();
    return redirect('/dash')->with('status', 'Form submitted successfully');

        }}