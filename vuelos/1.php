<?php 
#php del documento 1
#Variables
include_once "arraysbd.php";
include_once "funciones.php";
$texto=$_POST["vuelo"];

echo $texto."<br>";

        media_pasajeros($texto,$arraypasajeros);
        destinos($texto,$arrayciudad);
        fabricante($texto,$arrayfabricante);
        minutos_totales($texto,$arrayduracion,$num);


#Jesus este es un porrito que me fume por que no me salia una cosa.
#Lo dejo aqui por que me da pena despues de 10 horas trabajadas con esto
#$selector=$_POST["vuelo"];
/*switch ($selector) {
    case 'Vueling-AE12':
       #media_pasajeros($texto,);
        destinos($texto,$arrayciudad);
        fabricante($texto,$arrayfabricante);
        minutos_totales($texto,$arrayduracion,$num);
    
        break;
        
    case 'Volotea-EA21':($texto);
     # media_pasajeros($texto,);
     destinos($texto,$arrayciudad);
     fabricante($texto,$arrayfabricante);
     minutos_totales($texto,$arrayduracion,$num);
     
        break;
    case 'Iberia-WE44':
         # media_pasajeros($texto,);
        destinos($texto,$arrayciudad);
        fabricante($texto,$arrayfabricante);
        minutos_totales($texto,$arrayduracion,$num);
        break;

    case 'Ryanair-EW44':
         # media_pasajeros($texto,);
        destinos($texto,$arrayciudad);
        fabricante($texto,$arrayfabricante);
        minutos_totales($texto,$arrayduracion,$num);
         break;

    case 'Vueling-ZK87':
         # media_pasajeros($texto,);
        destinos($texto,$arrayciudad);
        fabricante($texto,$arrayfabricante);
        minutos_totales($texto,$arrayduracion,$num);
        break;
    
    case 'Volotea-UA21':
         # media_pasajeros($texto,);
        destinos($texto,$arrayciudad);
        fabricante($texto,$arrayfabricante);
        minutos_totales($texto,$arrayduracion,$num);
        break;

    case 'Iberia-WH44':
         # media_pasajeros($texto,);
        destinos($texto,$arrayciudad);
        fabricante($texto,$arrayfabricante);
        minutos_totales($texto,$arrayduracion,$num);
        break;

    case 'Ryanair-EL00':
         # media_pasajeros($texto,);
        destinos($texto,$arrayciudad);
        fabricante($texto,$arrayfabricante);
        minutos_totales($texto,$arrayduracion,$num);
        break;
    
    default:
        
        echo "Seleccione una opcion válida";
        break;
}*/
?>