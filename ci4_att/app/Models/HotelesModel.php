<?php

namespace App\Models;

use CodeIgniter\Model;

class HotelesModel extends Model
{
    protected $table         = 'hoteles';
    protected $primarykey = 'hotel_id';
    protected $allowedFields = [
        'hotel_id', 'nombre', 'correoelectronico','telefono','direccion','ciudad_id','categoria_id','usuario_id'
    ];
  //  protected $returnType    = \App\Entities\User::class;
    //protected $useTimestamps = true;
}