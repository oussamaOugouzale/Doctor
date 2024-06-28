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
        'genre',
        'photo',
        'document',
        'languages',
        'partCompleted',
    ];
    protected $guarded = [
        'id'
    ];

    public function horaires()
    {
        return $this->hasMany(Horaire::class);
    }
    public function coordonnes()
    {
        return $this->hasOne(Coordonne::class);
    }
    public function specialites()
    {
        return $this->hasOne(Specialite::class);
    }
    public function formations()
    {
        return $this->hasMany(Formation::class);
    }
    public function cabinets()
    {
        return $this->hasMany(Cabinet::class);
    }
    public function pratique()
    {
        return $this->hasOne(Pratique::class);
    }
    public function rdv()
    {
        return $this->hasMany(Rdv::class);
    }
}
