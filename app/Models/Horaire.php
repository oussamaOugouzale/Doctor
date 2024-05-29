<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horaire extends Model
{
    use HasFactory;
    
    protected $table = 'horaires';
    protected $fillable = [
        'jour',
        'debut_première',
        'fin_première',
        'debut_deuxième',
        'fin_deuxième',
        'disponible_première',
        'disponible_deuxième',
        'doctor_id',
    ];

    protected $guarded = [
        'id'
    ];

    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
}
