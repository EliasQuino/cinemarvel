<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $table = 'proveedors'; // Asegúrate de que esto esté correcto

    protected $fillable = [
        'nombre',
        'telefono',
        'email',
    ];


  // Relación con Compras
  public function compras()
  {
      return $this->hasMany(Compra::class);
  }
}
