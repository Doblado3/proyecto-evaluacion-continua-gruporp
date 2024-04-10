<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class LineaCompra extends Pivot
{
    protected $casts = [
        'fecha_compra' => 'datetime:Y-m-d'
    ];
}