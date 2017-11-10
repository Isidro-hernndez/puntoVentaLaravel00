<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{

    protected $table = 'sucursal';

    protected $primaryKey = 'idSucursal';

    protected $fillable = [
        'direccion', 'telefono', 'nombre',
    ];
}