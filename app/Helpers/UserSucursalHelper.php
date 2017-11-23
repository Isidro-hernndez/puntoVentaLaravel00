<?php

namespace App\Helpers\UserSucursalHelper;

use Illuminate\Support\Facades\DB;

/**
 *
 */
class UserSucursalHelper{

  public function getNombreSucursalFromIdUser($sucursal_id)
  {
    $sucursal = DB::table('sucursal')->where('idSucursal', $sucursal_id);

    return (isset($sucursal->nombre) ? $sucursal->nombre : '');
  }
}
