<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class timetableController extends Controller
{
    public function displayuser(Request $request)
    {
        $users = User::all();
    
        return view('projectschedule', compact('users'));
    }
}
