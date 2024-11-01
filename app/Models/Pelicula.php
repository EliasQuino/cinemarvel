<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;


    protected $table = 'peliculas'; // Asegúrate de que este nombre sea correcto

    protected $fillable = [
        'Nombre',
        'Clasificacion',
        'Duracion',
        'Idgenero',

    ];



    public function genero()
    {
        return $this->belongsTo(Genero::class, 'Idgenero'); // Relación pertenece a (BelongsTo) con Puesto
    }

}
