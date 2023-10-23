<?php

namespace App\Http\Controllers;

use App\Models\calendar_table;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CrudEvents;

class TimetableController extends Controller
{
    public function displayuser(Request $request)
    {
        $users = User::all();
        $dates = calendar_table::all();
    
        return view('projectschedule', compact('users', 'dates'));
    }

    public function displayuser1(Request $request)
    {
        $users = User::all();
        $dates = calendar_table::all();
    
        return view('projectschedule1', compact('users', 'dates'));
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
    $count = calendar_table::whereYear('dt', $year)
                            ->whereMonth('dt', $month)
                            ->count();

    $users = User::all();
    $dates = calendar_table::all();

    return view('projectschedule', compact('count', 'month', 'year', 'users', 'dates'));
}

}
