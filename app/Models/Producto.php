<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Spatie\Permission\Traits\HasRoles;

class Producto extends Model
{
    use HasFactory;
   /// use HasRoles;

    protected $table = 'productos'; // Asegúrate de que este nombre sea correcto
    public $timestamps = false;

    protected $fillable = [
        'Nombre',
        'Fecha_Vencimiento',
        'Precio',
        'IdCategoria',
        'cantidad',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'IdCategoria'); // Relación pertenece a (BelongsTo) con categoria
    }



  // Relación con Compras (a través de la tabla pivote compra_producto)
  public function compras()
  {
      return $this->belongsToMany(Compra::class, 'compra_producto')
                  ->withPivot('cantidad', 'precio') // Campos de la tabla pivote
                  ->withTimestamps(); // Si quieres usar created_at y updated_at
  }
}
