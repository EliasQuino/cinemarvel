<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    use HasFactory;

    protected $table = 'bitacora'; // Nombre de la tabla
    public $timestamps = false;    // No usar timestamps automáticos de Laravel (creado_at, actualizado_at)

    protected $fillable = [
        'user_id',
        'accion',
        'descripcion',
        'fecha_hora',
        'ip_address',
        'device_info',
    ];
}