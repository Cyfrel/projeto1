<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $fillable = [
        'id_cliente',
        'data_entrega',
        'valor_frete',
    ];

    use HasFactory;
}
