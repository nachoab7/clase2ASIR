<?php 
#todas las funciones necesarias para el trabajo

include_once "arraysbd.php";
include_once "1.php";
/*function media_pasajeros($num1,$num2){

};*/


#   $texto="Vueling-AE12";
$num=0;
function fabricante($texto,$arrayfabricante){
    foreach ($arrayfabricante as $fabricantito) {
        $fabricante=$fabricantito["Fabricante"];
        $vuelo=$fabricantito["Vuelo"];

        if ($vuelo==$texto) {
            echo "El fabricante de este avión es: ". $fabricante."<br>";
        }
        
    }
}
function minutos_totales($texto,$arrayduracion,$num ){
    foreach ($arrayduracion as $duracioncita) {
        $vuelo=$duracioncita["Vuelo"];
        $duracion=$duracioncita["Minutos"];
        if ($vuelo==$texto) {
            $num=$num+$duracion;
            $res=$num;
            
        }
    }
    echo "Los minutos totales de este vuelo son: ".$res."<br>";
}

function destinos($texto,$arrayciudad){
    foreach ($arrayciudad as $ciudadita) {
     $vuelo=$ciudadita["Vuelo"];
     $ciudad=$ciudadita["Ciudad"];
     if ($vuelo==$texto) {
         echo "La ultima/s ciudad/es visitada/s por este avion son: ". $ciudad."<br>";
     }
}
}




?>