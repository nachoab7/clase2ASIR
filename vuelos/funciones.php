<?php 
#todas las funciones necesarias para el trabajo

include_once "arraysbd.php";

/*function media_pasajeros($num1,$num2){

};*/


#   $texto="Vueling-AE12";
#Funciones primer php (Mostrar vuelo)

function media_pasajeros($texto,$arraypasajeros){
    $contador=0;
    $totalpasajeros=0;
    foreach ($arraypasajeros as $pasajeritos) {
        $vuelo=$pasajeritos["Vuelo"];
        if ($vuelo==$texto) {
            $pasajeros=$pasajeritos["Personas"];
           $totalpasajeros=$totalpasajeros+$pasajeros;
            $contador++;
        }
    }
    $totalpasajeros=$totalpasajeros/$contador;
    echo "La media de pasajeros de este vuelo es: ".$totalpasajeros."<br>";
}



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
function minutos_totales($texto,$arraypasajeros,$num ){
    foreach ($arraypasajeros as $pasajeroscita) {
        $vuelo=$pasajeroscita["Vuelo"];
        $pasajeros=$pasajeroscita["Minutos"];
        if ($vuelo==$texto) {
            $num=$num+$pasajeros;
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
#Funciones segundo php (Estadisticas aeropuerto)

















/*function media_pasajeros($texto,$arraypasajeros){
foreach($arraypasajeros as $entry_name => $entry_data){
    
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