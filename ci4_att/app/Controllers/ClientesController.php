<?php

namespace App\Controllers;
use App\Models\ClientesModel;


class ClientesController extends BaseController
{
    public function index(): string
    {
        $clientes = new ClientesModel();
        $datos ['datos']=$clientes->findAll();
      // print_r($datos);
      return view('clientes',$datos);
    }


     //agregar planes y nuevo planes
     public function nuevosClientes():string 
     {
         return view('clientes_nuevos');
     }
     public function agregarClientes()
     {
         $cliente = $this->request->getVar('txtHotelId');
         //echo "<br>Id = ". $id;
         $nombre=$this->request->getVar('txtNombre');
         //echo "<br>nombre = ". $nombre;
         $apellido = $this->request->getVar('txtCorreo');
         //echo "<br>Pago =". $pago;
         $nit = $this->request->getVar('txtTelefono');
         //echo "<br>Minutos = ". $minutos;
         $telefono = $this->request->getvar('txtDireccion');
         //echo "<br>Mensajes = ". $mensajes;
         $correo = $this->request->getvar('txtCiudad');
         $direccion = $this->request->getvar('txtCategoria');
         $contra = $this->request->getvar('txtUsuario');
         $clientes = new ClientesModel();
         $datos=[
             'cliente_id'=>$cliente,
             'nombre'=>$nombre,
             'apellido'=>$apellido,
             'nit'=>$nit,
             'telefono'=>$telefono,
             'correo_electronico'=>$correo,
             'direccion'=>$direccion,
             'contrasenia'=>$contra
         ];
         $clientes->insert($datos);
         echo "Datos guardados";
         return redirect()->route('clientes');
     }


     //Eliminar 
     public function eliminarCliente($id=null){
        //echo $id;
        $clientes = new ClientesModel();
        $clientes ->delete(['cliente_id'=>$id]);
        return redirect()->route('clientes');
      
    }
     }