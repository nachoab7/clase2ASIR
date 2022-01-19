<?php 
#todas las funciones necesarias para el trabajo

#include "arraysdb.php"
/*function media_pasajeros($num1,$num2){

};*/
$arrayfabricante=array(
    array("Vuelo"=>"Vueling-AE12","Fabricante"=>"Boeing"),
    array("Vuelo"=>"Volotea-EA21","Fabricante"=>"Airbus"),
    array("Vuelo"=>"Iberia-WE44","Fabricante"=>"Airbus"),
    array("Vuelo"=>"Ryanair-EW44","Fabricante"=>"Boeing"),
    array("Vuelo"=>"Vueling-ZK87","Fabricante"=>"Airbus"),
    array("Vuelo"=>"Volotea-UA21","Fabricante"=>"Boeing"),
    array("Vuelo"=>"Iberia-WH44","Fabricante"=>"Boeing"),
    array("Vuelo"=>"Ryanair-EL00","Fabricante"=>"Airbus")
);

$texto="Vueling-AE12";
function fabricante($texto,$arrayfabricante){
    foreach ($arrayfabricante as $fabricantito) {
        $fabricante=$fabricantito["Fabricante"];
        $vuelo=$fabricantito["Vuelo"];
        if ($vuelo=$texto) {
            echo $fabricante;
        }
    }
}

?>