<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\contact;
use Illuminate\Support\Facades\DB;
class ContactFormController extends Controller
{
    public function index()
    {
        return view('contact-form');
    }

    public function index1()
    {
        $contact = contact::all();

        return view('projects', compact('contact'));
    }
    public function store(Request $request)
{
    $inquirydata= new contact();
    $inquirydata->name= $request['name'];
    $inquirydata->email= $request['email'];
    $inquirydata->inquiry= $request['inquiry'];
    $inquirydata->save();

    return redirect('/projects')->with('status', 'Form submitted successfully');

}}