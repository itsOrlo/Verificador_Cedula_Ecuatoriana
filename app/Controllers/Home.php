<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $nombre = $_GET['nombre'];
        $cedula = $_GET['cedula'];
        $c = separar($cedula);
        $v = validarCedula($cedula);
        $m=["nombre" => $nombre, "cedula" => $cedula, "caracter" => $c,"validacion" => $v];
        return view('datos',$m);
    }
    public function saludo(){
        return view('bienvenida');
    }
}
