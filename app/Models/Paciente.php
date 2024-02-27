<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'dni',
        'nusha',
    ];


    
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function medicamento_farmacia()
    {
        return $this->belongsTo(MedicamentoFarmacia::class);
    }

   
    
}