<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\form;
use Illuminate\Support\Facades\DB;
class formController extends Controller
{
    public function index()
    {
        return view('post-project');
    }
    public function index1()
    {
        $forms = Form::all();
        return view('projects', compact('forms'));
    }

    public function delete($id)
    {
    $forms = Form::find($id);
    if ($forms) {
        $forms->delete();
    }

    return redirect('projects')->with('status', 'Post Deleted Succesfully');
    }
    public function store(Request $request)
{
    $this->validate($request, [
        'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    ]);
    $image_path = $request->file('image')->store('image', 'public');
    $image_path_new = explode('/', $image_path);
    $profile_image_path = $request->file('profilepic')->store('image', 'public');
    $profile_image_path_new = explode('/', $profile_image_path);
    $formdata= new form();
    $formdata->name= $request['name'];
    $formdata->projname= $request['projname'];
    $formdata->projdescription= $request['projdescription'];
    $formdata->relavance = $request['relavance'];
    $formdata->skills = $request['skills'];

    $formdata->image = $image_path_new[1];
    $formdata->profilepic = $profile_image_path_new[1];
    $formdata->save();
    return redirect('/projects')->with('status', 'Form submitted successfully');

        }}