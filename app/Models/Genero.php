<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{

    protected $table = 'generos'; // Asegúrate de que este nombre sea correcto

    protected $fillable = [
        'Nombre',
    ];



    public function peliculas()
    {
        return $this->hasMany(Genero::class, 'Idgenero'); // 'idpuesto' es la clave foránea en la tabla `cajeros` que apunta a `puestos`
    }
}
