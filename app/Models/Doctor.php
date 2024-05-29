<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Doctor extends Authenticatable
{
    use HasFactory;

    protected $table = 'doctors';
    protected $fillable = [
        'nom',
        'prenom',
        'numero_tel',
        'email',
        'password',
        'photo',
    ];
    protected $guarded = [
        'id'
    ];

    public function horaires(){
        return $this->hasMany(Horaire::class);
    }
}
