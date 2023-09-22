<?php

namespace App\Http\Controllers;

use App\Models\Skill; 
use Illuminate\Http\Request; 

class SkillController extends Controller
{
    public function create()
    {
        return view('skillform');
    }

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'allocated_time' => 'required|string|max:255',
            'proficiency_level' => 'required|string|max:255',
        ]);

        $skill_id = auth()->user()->id;

        // Create a new skill
        Skill::create([
            'name' => $request->input('name'),
            'allocated_time' => $request->input('allocated_time'),
            'proficiency_level' => $request->input('proficiency_level'),
            'skill_id' => $skill_id, 
        ]);

        // Redirect back with a success message
        return redirect()->route('dashboard')->with('success', 'Skill added successfully!');
    }
}
