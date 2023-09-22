<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CrudEvents;
use App\Models\Product;
use App\Models\User;
use App\Models\Skill;

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
    $users = User::all();
    $skills = Skill::all();

    return view('layouts.app', compact('events', 'products', 'users', 'skills'));
}
    public function profiles()
    {
        $events = CrudEvents::all();
        $products = Product::all();
        $skills = Skill::all();
        $users = User::all();

        return view('profiles', compact('events', 'products', 'users', 'skills'));
    }
    public function UserSelection(Request $request)
    {
        // Retrieve the selected user's ID from the request
        $selectedUserId = $request->input('selectedUserId');
        $events = CrudEvents::all();
        $products = Product::all();
        $users = User::all();
        $skills = Skill::all();
    
        return view('profiles', compact('events', 'products', 'users','selectedUserId', 'skills'));
    }
}
