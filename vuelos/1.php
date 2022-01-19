<?php 
#php del documento 1
#Variables
include "arraysbd.php";
include "funciones.php";
#$texto=$_POST["texto"];
$selector=$_POST["vuelos"];

switch ($selector) {
    case 'Vueling-AE12':
      
       
       fabricante($texto);
       
    
        break;
        
    case 'Volotea-EA21':($texto);
    media_pasajeros($texto);
       ultimos_destinos($texto);
       fabricante($texto);
       minutos_vuelos($texto);
     
        break;
    case 'Iberia-WE44':
        media_pasajeros($texto);
        ultimos_destinos($texto);
        fabricante($texto);
        minutos_vuelos($texto);
        break;

    case 'Ryanair-EW44':
        media_pasajeros($texto);
        ultimos_destinos($texto);
        fabricante($texto);
        minutos_vuelos($texto);
         break;

    case 'Vueling-ZK87':
        media_pasajeros($texto);
        ultimos_destinos($texto);
        fabricante($texto);
        minutos_vuelos($texto);
        break;
    
    case 'Volotea-UA21':
        media_pasajeros($texto);
        ultimos_destinos($texto);
        fabricante($texto);
        minutos_vuelos($texto);
        break;

    case 'Iberia-WH44':
        media_pasajeros($texto);
        ultimos_destinos($texto);
        fabricante($texto);
        minutos_vuelos($texto);
        break;

    case 'Ryanair-EL00':
        media_pasajeros($texto);
        ultimos_destinos($texto);
        fabricante($texto);
        minutos_vuelos($texto);
        break;
    
    default:
        
        echo "Seleccione una opcion válida";
        break;
}



?>