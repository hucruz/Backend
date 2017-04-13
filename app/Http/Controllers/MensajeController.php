<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Mensaje;

class MensajeController extends Controller
{
    public function index(){
        /*
        $nombre = "Mario :)";
        $valor = "Hola " . $nombre;
        return $valor;
        */
        return Mensaje::all();
    }
    public function index2($variable){
        return $variable;
    }

    public function formulario(){
        return view("formulario");
    }
    public function registrar(){
        $mensaje = Input::get("msg");
        $msg = Mensaje::create(["mensaje"=>$mensaje]);
        $msg->save();
        return Input::get("msg");
    }
}
