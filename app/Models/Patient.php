<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Patient extends Authenticatable
{
    use Notifiable;

    protected $table = 'patients';

    protected $fillable = [
        'prenom',
        'nom',
        'genre',
        'email',
        'password',
        'numero_tel',
        'updated_at',
        'created_at'
    ];

    protected $guarded = [
        'id'
    ];
}
