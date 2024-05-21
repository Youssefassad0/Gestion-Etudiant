<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['titre', 'NbrHeure'];
    protected $primaryKey = 'idf';
    public function classes()
    {
        return $this->hasMany(Classe::class, 'idformation');
    }
    public function etudiants()
    {
        return $this->belongsToMany(Formation::class, 'avis', 'idE', 'idf')->withPivot('points');
    }
}
