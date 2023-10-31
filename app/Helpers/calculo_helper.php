<?php
function saludo(){
    return "hola soy un helper";
}

function separar($cedula){
    $dato = str_split($cedula);
    //$dato = explode("",$cedula,1);
    $caracter = $dato[0];
    return $caracter;
}

function validarCedula($cedula){
    $estado = 0;
    $aux = str_split($cedula);
    $multiplicacion = 0;
    $validador = "";
    $resta = "";
    for ($i=0; $i < sizeof($aux)-1 ; $i++) { 
        if($i%2 == 0){
            $validador = ($aux[$i]*2);
            if($validador > 9){
                $resta = $validador - 9;
                $multiplicacion += $resta;
            }else{
                $multiplicacion += $validador;
            }
        }else{
            $multiplicacion += $aux[$i];
        }
    }
    /* //SUMA
    $resultado = 0;
    $auxM = str_split($multiplicacion);
    for ($i=0; $i < sizeof($auxM); $i++) { 
        $resultado += $auxM[$i];
    } */
    //DECIMA SUPERIOR
    //$decimaSup = (floor(($resultado/10))+1)*10;
    
    $decimaSup = ceil($multiplicacion/10)*10;
    $resta = $decimaSup - $multiplicacion;
    if($aux[9] == $resta){
        $estado = "ECUATORIANO CARAJOOO";
    }else{
        $estado = "EXTRANJERO";
    }

    return $estado;
}
