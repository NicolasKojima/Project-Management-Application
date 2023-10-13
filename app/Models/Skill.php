<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    // Define the fillable fields for mass assignment
    protected $fillable = ['name', 'allocated_time', 'proficiency_level', 'user_id', 'skill_id'];

}
