<?php

namespace App\Http\Controllers;

use App\Models\calendar_tables;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CrudEvents;

class TimetableController extends Controller
{
    // public function displayuser(Request $request)
    // {
    //     $users = User::all();
    //     $dates = calendar_tables::all();
    
    //     return view('timetable', compact('users', 'dates'));
    // }

    public function displayuser(Request $request)
    {
        $users = User::all();
        $dates = calendar_tables::all();
        $events = CrudEvents::all();
    
        return view('timetable', compact('users', 'dates','events'));
    }

    public function initializeCalendar()
    {
        $events = CrudEvents::all();
        return response()->json($events);
    }

    public function calculateDates(Request $request)
{
    $year = $request->input('year');
    $month = $request->input('month');

    // Query the database to get the number of dates
    $count = calendar_tables::whereYear('dt', $year)
                            ->whereMonth('dt', $month)
                            ->count();

    $users = User::all();
    $dates = calendar_tables::all();

    return view('timetable', compact('count', 'month', 'year', 'users', 'dates'));
}

}
