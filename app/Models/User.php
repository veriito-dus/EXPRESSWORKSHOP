<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $fillable = ['id','name', 'user', 'contra','id_rol', 'created_at', 'updated_at'];
}
