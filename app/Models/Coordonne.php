<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordonne extends Model
{
    use HasFactory;
    protected $table = 'coordonnes';
    protected $fillable = [
        'adresse',
        'ville',
        'tele_fixe',
        'tele_mobile',
        'delegation',
        'latitude',
        'longitude',
        'partCompleted',
        'doctor_id',
    ];
    protected $guarded = [
        'id'
    ];

    public function docto(){
        return $this->belongsTo(Doctor::class);
    }
}
