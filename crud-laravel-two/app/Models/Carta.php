<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carta extends Model
{
    protected $fillable = ['nombrecarta', 'descripcion', 'precio', '_token'];
}
