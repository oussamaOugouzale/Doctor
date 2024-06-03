<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialite extends Model
{
    use HasFactory;

    protected $fillable = [
        'specialite',
        'autre_specialite',
        'doctor_id'
    ];

    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
}
