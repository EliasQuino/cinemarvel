<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteVirtual extends Model
{
    use HasFactory;

    protected $fillable = [
        'FechaRegistro',
        'telefono',
        'Iduser',
    ];

    // Relación con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class, 'Iduser');
    }


}
