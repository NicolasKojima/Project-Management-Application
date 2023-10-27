<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calendar_table extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'year',
        'month',
        'day',
        'dt',
    ];    
}