<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['nom', 'prenom', 'adresse', 'date_naissance', 'idclasse'];
    protected $primaryKey = 'codeE';
    public function classe()
    {
        return $this->belongsTo(Classe::class, 'idclasse');
    }
    public function formations()
    {
        return $this->belongsToMany(Formation::class, 'avis', 'idE', 'idf')->withPivot('points');
    }
}
