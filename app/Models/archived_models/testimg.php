<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use HasFactory;
use Illuminate\Database\Eloquent\MassAssignmentException;


class testimg extends Model
{
    protected $fillable=[
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
        'image6',
    ];
}
