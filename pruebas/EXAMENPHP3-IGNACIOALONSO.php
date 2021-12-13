<?php
#variables
$entradas=$_POST["entraditas"];
        $entrada1=$entradas["entrada1"];
        $entrada2=$entradas["entrada2"];
        $entrada3=$entradas["entrada3"];
        $entrada4=$entradas["entrada4"];
        $entrada5=$entradas["entrada5"];
$selector=$_POST["operador"];
#funciones
function primer($entradas){
$tupac=array_shift($entradas);
echo "El array sin el primer elemento es: ";
print_r($entradas);
}

function ultimo($entradas){
    $tupac=array_pop($entradas);
    echo "El array sin el ultimo elemento es: ";
    print_r($entradas);
}

function ordenar($entradas){
    $tupac=array_flip($entradas);
     print_r($entradas);
}

function dividir($entradas){
    $tupac = array_chunk($entradas,2);
    echo "El array dividido es: ";
    print_r($entradas);
}
#switch
switch ($selector) {
    
    case 'primer':
        primer($entradas);
    break;

    case 'ultimo':
        ultimo($entradas);
    break;

    case 'ord':
        ordenar($entradas);
    break;

    case 'div':
        dividir($entradas);
    break;       

    default:
    echo "Seleccione una opcion válida";
    break;
}

?>