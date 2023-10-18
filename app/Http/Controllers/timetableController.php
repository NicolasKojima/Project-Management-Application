<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CrudEvents;

class TimetableController extends Controller
{
    public function displayuser(Request $request)
    {
        $users = User::all();
    
        return view('projectschedule', compact('users'));
    }

    public function displayuser1(Request $request)
    {
        $users = User::all();
    
        return view('projectschedule1', compact('users'));
    }

    public function initializeCalendar()
    {
        $events = CrudEvents::all();
        return response()->json($events);
    }
}
