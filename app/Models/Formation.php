<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    protected $fillable = [
        'institution_name',
        'formation',
        'start_date',
        'end_date',
        'years',
        'description',
        'doctor_id',
    ];

    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
}
