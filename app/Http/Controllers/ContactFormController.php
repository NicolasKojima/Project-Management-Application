<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\contact;
use Illuminate\Support\Facades\DB;
use App\Mail\FormSubmitted;
use Illuminate\Support\Facades\Mail;
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

    // $name = $request->input('name'); // Get the 'name' field from the form
    // Mail::to('nicolas.kojima@gmail.com')->send(new FormSubmitted($name));

    $inquirydata= new contact();
    $inquirydata->name= $request['name'];
    $inquirydata->email= $request['email'];
    $inquirydata->inquiry= $request['inquiry'];
    $inquirydata->save();

    return redirect('/dashboard')->with('status', 'Form submitted successfully');

}}
//     public function submitForm(Request $request)
//     {
//         // Process the form data
        
//         // Send the email
//         $name = $request->input('name'); // Replace with your form data
//         Mail::to('recipient@example.com')->send(new FormSubmitted($name));

//         // Redirect or return a response
// }