<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User; // Import the User model if not already imported

class Product extends Model
{
    use HasFactory;
        protected $fillable = [
            'name',
            'projname',
            'projdescription',
            'Relavance',
            'skills',
            'image',
            'profilepic',
            'created_by',
        ];
    }
    