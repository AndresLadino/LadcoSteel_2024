<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produccion extends Model
{
    
    
    protected $table = 'produccion'; // Nombre de la tabla en singular

    use HasFactory;
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    // Relación con la tabla "user"
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
