<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';

    protected $primaryKey = 'idMenu';

    protected $fillable = [
      'idMenu', 'precio', 'tipo',
    ];
}
