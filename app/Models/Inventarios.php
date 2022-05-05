<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventarios extends Model
{
    protected $fillable = ['id','producto', 'cantidad', 'created_at', 'updated_at'];
}
