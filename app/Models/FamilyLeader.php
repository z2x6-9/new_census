<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyLeader extends Model
{
    use HasFactory;

    protected $fillable = [
        'Leader',
        'Gender',
        'Date_Of_Birth',
        'Phone_Number',
        'Living',
        'Academic_Achievement',
    ];

    public function FamilyMembers(){
        $this->hasMany(FamilyMembers::class);
    }
}
