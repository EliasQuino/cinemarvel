<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias'; // Asegúrate de que este nombre sea correcto

    protected $fillable = [
        'nombre',
    ];



    public function productos()
    {
        return $this->hasMany(Producto::class, 'IdCategoria'); // 'idpuesto' es la clave foránea en la tabla `cajeros` que apunta a `puestos`
    }

}
