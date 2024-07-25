<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservacionModel extends Model
{
    protected $table         = 'reservaciones';
    protected $primarykey = 'reservacion_id';
    protected $allowedFields = [
        'reservacion', 'fecha', 'cliente_id','hotel_id','descripcion','usuario_id'
    ];
  //  protected $returnType    = \App\Entities\User::class;
    //protected $useTimestamps = true;
}