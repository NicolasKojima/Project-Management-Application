<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\indivs;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class IndivController extends Controller
{
    public function index()
    {
        return view('registration');
    }


    public function showRegistrationForm()
    {
        // Get the currently logged-in user
        $user = Auth::user();

        // Pass user data to the view
        return view('registration', compact('user'));
    }
    public function index1()
    {
        $indivs = indivs::all();

        return view('projects', compact('indivs'));
    }
    public function delete($id)
    {
    $indivs = indivs::find($id);
    if ($indivs) {
        $indivs->delete();
    }

    return redirect('/about-us')->with('status', 'Post Deleted Succesfully');
    }
    public function store(Request $request)
{
    $this->validate($request, [
        'profilepic' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    ]);
    
    $profile_image_path = $request->file('profilepic')->store('image', 'public');
    $profile_image_path_new = explode('/', $profile_image_path);
    

    $indivdata= new indivs();
    $indivdata->name= $request['name'];
    $indivdata->email= $request['email'];
    $indivdata->introduction= $request['introduction'];
    $indivdata->profilepic = $profile_image_path_new[1];



    $indivdata->save();

    return redirect('/about-us')->with('status', 'Form submitted successfully');

}}