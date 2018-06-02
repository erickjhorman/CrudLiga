<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jugador extends Model
{
    protected $fillable = ['nombre', 'edad', 'pocision','nacionalidad'];
}
