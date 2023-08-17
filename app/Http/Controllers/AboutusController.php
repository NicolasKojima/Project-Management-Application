<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\indivs;
use App\Models\Post;

class AboutusController extends Controller
{
    public function index()
    {
        $indivs = indivs::all();
        $posts = post::all();

        return view('about-us', compact('indivs', 'posts')); 
    }
}




