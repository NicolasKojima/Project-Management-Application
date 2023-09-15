<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CrudEvents;

class EventController extends Controller
{
    public function displayEvents()
    {
        $events = CrudEvents::all();

        return view('display-events', compact('events'));
    }
    public function registerEvents()
    {
        $events = CrudEvents::all();

        return view('register-events', compact('events'));
    }

    // ...
}
