<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientesModel extends Model
{
    protected $table         = 'clientes';
    protected $primarykey = 'cliente_id';
    protected $allowedFields = [
        'cliente_id', 'nombre', 'apellido','nit','telefono','correo_electronico','direccion','contrasenia'
    ];
  //  protected $returnType    = \App\Entities\User::class;
    //protected $useTimestamps = true;
}