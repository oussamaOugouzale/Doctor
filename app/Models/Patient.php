<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Patient extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'patients';

    protected $fillable = [
        'prenom',
        'nom',
        'genre',
        'email',
        'password',
        'photo',
        'age',
        'numero_tel',
        'updated_at',
        'created_at'
    ];

    protected $guarded = [
        'id'
    ];

    public function rdv(){
        return $this->hasMany(Rdv::class);
    }
}
