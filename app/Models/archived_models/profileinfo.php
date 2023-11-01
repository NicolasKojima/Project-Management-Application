<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use HasFactory;
use Illuminate\Database\Eloquent\MassAssignmentException;


class profileinfo extends Model
{
    protected $fillable=[
        'image1',
        'projname1',
        'projdescription1',
        'image2',
        'projname2',
        'projdescription2',
        'image3',
        'projname3',
        'projdescription3',
        'image4',
        'projname4',
        'projdescription4',
        'image5',
        'projname5',
        'projdescription5',
        'image6',
        'projname6',
        'projdescription6',
    ];
}
