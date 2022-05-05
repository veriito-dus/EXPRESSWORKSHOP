<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recepcions extends Model
{
    protected $fillable = ['id','fecha', 'created_at', 'updated_at'];
}
