<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CrudEvents;
use App\Models\Product;

class EventController extends Controller
{
    public function registerEvents()
    {
        $events = CrudEvents::all();

        return view('register-events', compact('events'));
    }

    public function dashboard()
{
    $events = CrudEvents::all();
    $products = Product::all();

    return view('layouts.app', compact('events', 'products'));
}


    // ...
}
