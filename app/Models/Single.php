<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Single extends Model
{
    use HasFactory;

    protected $fillable = [
        'Person',
        'Gender',
        'Date_Of_Birth',
        'Phone_Number',
        'Living',
    ];
}
