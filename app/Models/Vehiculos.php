<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehiculos extends Model
{
    protected $fillable = ['id','marca', 'modelo', 'caracteristicas','user_id','mantenimiento_id', 'created_at', 'updated_at'];
}
