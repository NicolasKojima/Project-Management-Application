<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use HasFactory;
use Illuminate\Database\Eloquent\MassAssignmentException;


class Post extends Model
{
    protected $fillable = [
        'name',
        'projname',
        'projdescription',
        'Relavance',
        'skills',
        'image',
        'profilepic',
    ];
}
