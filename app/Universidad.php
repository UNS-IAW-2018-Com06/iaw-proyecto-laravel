<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Universidad extends Eloquent{

    protected $connection = 'mongodb';
    protected $collection = 'universidades';
    
    protected $fillable = [
        'nombre', 'provincia','ciudad','direccion','telefono','web'
    ];
}