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

#numero total de ciudades visitadas
function totalciudad($arrayciudad){

    $arrayunique=array_unique(array_column($arrayciudad, 'Ciudad'));    
    $arrayintersect=array_intersect_key($arrayciudad,$arrayunique);
    echo "El numero de ciudades visitadas son: ".count($arrayintersect)."<br>";
    

}

#Esta funcion es igual que la de fabricante de aviones
function numero_ciudades($arrayciudad){
    $contadormilan=0;
    $contadorroma=0;
    $contadorestambul=0;
    $contadormadrid=0;
    $contadorlima=0;
    $contadorbilbao=0;
    foreach ($arrayciudad as $ciudad) {
        $laciudad=$ciudad["Ciudad"];

        if ($laciudad=="Milán") {
            
            $contadormilan++;
        } elseif ($laciudad=="Roma"){
            $contadorroma++;
        }
        elseif ($laciudad=="Estambul"){
            $contadorestambul++;
        }
        elseif ($laciudad=="Madrid"){
            $contadormadrid++;
        }
        elseif ($laciudad=="Lima"){
            $contadorlima++;
        }
        elseif ($laciudad=="Bilbao"){
            $contadorbilbao++;
        }
        
        
    }
    echo "Las veces que se ha ido a Milan son: ".$contadormilan."<br>";
    echo "Las veces que se ha ido a Roma son: ".$contadorroma."<br>";
    echo "Las veces que se ha ido a Estambul son: ".$contadorestambul."<br>";
    echo "Las veces que se ha ido a Madrid son: ".$contadormadrid."<br>";
    echo "Las veces que se ha ido a Lima son: ".$contadorlima."<br>";
    echo "Las veces que se ha ido a Bilbao son: ".$contadorbilbao."<br>";

$ciudades=array(
    array("Numero" => $contadorroma,"Ciudad" => "Roma" ),
    array("Numero" => $contadormilan, "Ciudad" => "Milán" ),
    array("Numero" => $contadorestambul, "Ciudad" => "Estambul" ),
    array("Numero" => $contadormadrid, "Ciudad" => "Madrid" ),
    array("Numero" => $contadorlima, "Ciudad" => "Lima" ),
    array("Numero" => $contadorbilbao, "Ciudad" => "Bilbao" )
);

rsort($ciudades);
echo "La ciudad más visitada es: ";
$arraymaximo=(array_column($ciudades, "Ciudad"));
$maxVisitas=$arraymaximo[0];
echo $maxVisitas."<br>";

echo "Las ciudades menos visitadas son: ";
$minvisita = array_slice($ciudades,2);
foreach ($minvisita as $minimo) {
    $minimaciudad=$minimo["Ciudad"];
    echo $minimaciudad."/";

}
}

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

function numero_ciudadess($arrayciudad){
    $contadormilan=0;
    $contadorroma=0;
    $contadorestambul=0;
    $contadormadrid=0;
    $contadorlima=0;
    $contadorbilbao=0;
    foreach ($arrayciudad as $ciudad) {
        $laciudad=$ciudad["Ciudad"];

        if ($laciudad=="Milán") {
            
            $contadormilan++;
        } elseif ($laciudad=="Roma"){
            $contadorroma++;
        }
        elseif ($laciudad=="Estambul"){
            $contadorestambul++;
        }
        elseif ($laciudad=="Madrid"){
            $contadormadrid++;
        }
        elseif ($laciudad=="Lima"){
            $contadorlima++;
        }
        elseif ($laciudad=="Bilbao"){
            $contadorbilbao++;
        }
        
        
    }
    
$ciudades=array(
    array("Numero" => $contadorroma,"Ciudad" => "Roma" ),
    array("Numero" => $contadormilan, "Ciudad" => "Milán" ),
    array("Numero" => $contadorestambul, "Ciudad" => "Estambul" ),
    array("Numero" => $contadormadrid, "Ciudad" => "Madrid" ),
    array("Numero" => $contadorlima, "Ciudad" => "Lima" ),
    array("Numero" => $contadorbilbao, "Ciudad" => "Bilbao" )
);

rsort($ciudades);
echo "La ciudad más conexiones es: ";
$arraymaximo=(array_column($ciudades, "Ciudad"));
$maxVisitas=$arraymaximo[0];
echo $maxVisitas."<br>";

echo "Las ciudades menos conexiones son: ";
$minvisita = array_slice($ciudades,2);
foreach ($minvisita as $minimo) {
    $minimaciudad=$minimo["Ciudad"];
    echo $minimaciudad."/";

}
}
?>