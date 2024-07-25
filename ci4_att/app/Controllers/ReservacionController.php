<?php

namespace App\Controllers;
use App\Models\ReservacionModel;


class ReservacionController extends BaseController
{
    public function index(): string
    {
        $reservar = new ReservacionModel();
        $datos ['datos']=$reservar->findAll();
      // print_r($datos);
      return view('reservacion',$datos);
    }



     //agregar planes y nuevo planes
     public function nuevasReservas():string 
     {
         return view('reservacion_nueva');
     }
     public function agregarReservacion()
     {
         $reservaId = $this->request->getVar('txtReserva');
         //echo "<br>Id = ". $id;
         $fecha=$this->request->getVar('txtFecha');
         //echo "<br>nombre = ". $nombre;
         $cliente = $this->request->getVar('txtCliente');
         //echo "<br>Pago =". $pago;
         $hotel = $this->request->getVar('txtHotel');
         //echo "<br>Minutos = ". $minutos;
         $descripcion = $this->request->getvar('txtDescripcion');
         //echo "<br>Mensajes = ". $mensajes;
         $usuario = $this->request->getvar('txtUsuario');
         $reservar = new ReservacionModel();
         $datos=[
             'reservacion_id'=>$reservaId,
             'nombre'=>$fecha,
             'cliente_id'=>$cliente,
             'hotel_id'=>$hotel,
             'descripcion'=>$descripcion,
             'usuario_id'=>$usuario
         ];
         $reservar->insert($datos);
         echo "Datos guardados";
         return redirect()->route('reservacion');
     }
     public function eliminarReservacion($id=null){
        //echo $id;
        $clientes = new ReservacionModel();
        $clientes ->delete(['reservacion_id'=>$id]);
        return redirect()->route('reservaciones');
    }
}
