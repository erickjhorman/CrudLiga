<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class liga extends Model
{
    protected $fillable = ['nombre', 'ciudad', 'director','estadio','año'];
}
