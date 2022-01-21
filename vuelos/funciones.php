<?php 
#todas las funciones necesarias para el trabajo

include_once "arraysbd.php";

#Funciones primer php (Mostrar vuelo)

function media_pasajeros($texto,$arrayduracion){
    $contador=0;
    $totalpasajeros=0;
    foreach ($arrayduracion as $pasajeritos) {
        $vuelo=$pasajeritos["Vuelo"];
        $pasajeros=$pasajeritos["Personas"];
        if ($vuelo==$texto) {
            
           $totalpasajeros=$totalpasajeros+$pasajeros;
            $contador++;
        }
    }
    $totalpasajeros=$totalpasajeros/$contador;
    $totalpasajeros/60;
    echo "La media de pasajeros de este vuelo es: ".$totalpasajeros."<br>";
}

function fabricante($texto,$arrayfabricante){
    foreach ($arrayfabricante as $fabricantito) {
        $fabricante=$fabricantito["Fabricante"];
        $vuelo=$fabricantito["Vuelo"];
        if ($vuelo==$texto) {
            echo "El fabricante de este avión es: ". $fabricante."<br>";
        }
        
    }
}

$num=0;
function minutos_totales($texto,$arrayduracion,$num ){
    foreach ($arrayduracion as $pasajeroscita) {
        $vuelo=$pasajeroscita["Vuelo"];
        $pasajeros=$pasajeroscita["Minutos"];
        if ($vuelo==$texto) {
            $num=$num+$pasajeros;
        }
    }
    echo "Los minutos totales de este vuelo son: ".$num."<br>";
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

#funciones segundo php
function media_horas_todos_vuelos($arrayduracion){
    $totalpasajeros=0;
    $contador=0;
    foreach ($arrayduracion as $pasajeritos) {
        $vuelo=$pasajeritos["Vuelo"];
        $pasajeros=$pasajeritos["Minutos"];
           $totalpasajeros=$totalpasajeros+$pasajeros;
           $contador++;
    }
    $totalpasajeros=$totalpasajeros/$contador;
   $totalpasajeros=$totalpasajeros/60;
    echo "La media de horas de este vuelo es: ".$totalpasajeros."<br>";
}   

$totalpasajeros=0;
function total_pasajeros_todo($arraypasajeros,$totalpasajeros){
    foreach ($arraypasajeros as $pasajeritos) {
        $pasajeros=$pasajeritos["Personas"];
           $totalpasajeros=$totalpasajeros+$pasajeros;
    }
   
    echo "El total de pasajeros de todos los vuelos es: ".$totalpasajeros."<br>";
}

function fabricantes_de_aviones($arrayfabricante){
    $contadorboeing=0;
    $contadorairbus=0;
    foreach ($arrayfabricante as $fabricante) {
        $elfabricante=$fabricante["Fabricante"];

        if ($elfabricante=="Boeing") {
            
            $contadorboeing++;
        } elseif ($elfabricante=="Airbus"){
            $contadorairbus++;
        }
        
    }
    echo "El número de aviones que tiene Boeing es: ".$contadorboeing."<br>";
    echo "El número de aviones que tiene Airbus es: ".$contadorairbus."<br>";
}

#Funciones tercer PHP

#Esta funcion es igual que la de fabricante de aviones
/*function numero_ciudades($arrayfabricante){
    $contadorboeing=0;
    $contadorairbus=0;
    foreach ($arrayfabricante as $fabricante) {
        $elfabricante=$fabricante["Fabricante"];

        if ($elfabricante=="Boeing") {
            
            $contadorboeing++;
        } elseif ($elfabricante=="Airbus"){
            $contadorairbus++;
        }
        
    }
    echo "El número de aviones que tiene Boeing es: ".$contadorboeing."<br>";
    echo "El número de aviones que tiene Airbus es: ".$contadorairbus."<br>";*/


















#Funciones cuarto php (Estadisticas avion)
$totalpasajeros=0;
function total_pasajeros($texto,$arraypasajeros,$totalpasajeros){
    
    
    foreach ($arraypasajeros as $pasajeritos) {
        $vuelo=$pasajeritos["Vuelo"];
        $pasajeros=$pasajeritos["Personas"];
        if ($vuelo==$texto) {
            
           $totalpasajeros=$totalpasajeros+$pasajeros;
           
        }
    }
   
    echo "El total de pasajeros de este vuelo es: ".$totalpasajeros."<br>";
}

function media_horas($texto,$arrayduracion){
    $contador=0;
    $totalpasajeros=0;
    foreach ($arrayduracion as $pasajeritos) {
        $vuelo=$pasajeritos["Vuelo"];
        $pasajeros=$pasajeritos["Minutos"];
        if ($vuelo==$texto) {
            
           $totalpasajeros=$totalpasajeros+$pasajeros;
            $contador++;
        }
    }
    $totalpasajeros=$totalpasajeros/$contador;
   $totalpasajeros=$totalpasajeros/60;
    echo "La media de horas de este vuelo es: ".$totalpasajeros."<br>";
}   














/*function media_pasajeros($texto,$arrayduracion){
foreach($arrayduracion as $entry_name => $entry_data){
    
   foreach($entry_data as $sub_name => $sub_data){
    $vuelo=$entry_data["Vuelo"];
    $personas=$entry_data["Personas"];
    if ($vuelo==$texto){
        echo "La media de pasajeros es: ". $entry_name;
    }
      $sub_results = array_filter(array_column($sub_data, 'result'));
      $averages[$entry_name][$sub_name] = (count($sub_results) > 0 ? array_sum($sub_results)/count($sub_results) : 'N/A');
   }
   
} 

}*/

?>