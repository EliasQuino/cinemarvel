<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    protected $table = 'compras'; // Asegúrate de que este nombre sea correcto

    protected $fillable = [
        'proveedor_id',
        'fecha',
        'IdCajero',
        'precio_total',
    ];

    // Relación con Proveedor
    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
    }

    // Relación con Producto (a través de la tabla pivote compra_producto)
    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'compra_producto')
                    ->withPivot('cantidad', 'precio') // Campos de la tabla pivote
                    ->withTimestamps(); // Si quieres usar created_at y updated_at
    }
}
