<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['libelle', 'NombreMax', 'idformation'];
    protected $primaryKey = 'idC';
    public function formation()
    {
        return $this->belongsTo(Formation::class, 'idformation');
    }
    public function etudiants()
    {
        return $this->hasMany(Etudiant::class);
    }
}
