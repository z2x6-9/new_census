<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyMembers extends Model
{
    use HasFactory;

    protected $fillable = [
        'Leader_id',
        'Name',
        'Gender',
        'Date_Of_Birth',
        'Relationship',
        'Academic_Achievement',
    ];

    public function FamilyLeader(){
        $this->belongsTo(FamilyLeader::class,'id');
    }
}
