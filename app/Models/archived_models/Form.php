<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\MassAssignmentException;

class form extends Model
{
    protected $fillable = [
        'name',
        'projname',
        'projdescription',
        'relavance',
        'skills',
        'image',
        'profilepic',
    ];
}