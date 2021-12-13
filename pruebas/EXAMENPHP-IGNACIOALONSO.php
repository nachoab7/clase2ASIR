<?php
#variables
$input1=$_POST["texto1"];
$input2=$_POST["texto2"];
$selector=$_POST["conversor"];
$selector2=$_POST["texto2"];


#funciones
function decbinario($input1){
    $decbin=base_convert($input1, 10,2);
    echo "El resultado es " . $decbin. "<br>";
}

function decoctal($input1){
    $decoctal=base_convert($input1, 10,8);
    echo "El resultado es " . $decoctal . "<br>";
}

function dechexadecimal($input1){
    $dechexadecimal=base_convert($input1, 10,16);
    echo "El resultado es " . $dechexadecimal. "<br>";
}
function bindecimal($input1){
    $bindecimal=base_convert($input1, 2,10);
    echo "El resultado es " . $bindecimal. "<br>";
}
function octadecimal($input1){
    $octadecimal=base_convert($input1, 8,10);
    echo "El resultado es " . $octadecimal. "<br>";
}
function hexabinario($input1){
    $hexabinario=base_convert($input1, 16,2);
    echo "El resultado es " . $hexabinario. "<br>";
}

function random($random){
$random=rand(0, 2048);
echo "El numero aleatorio es " . $random;

}

switch ($selector) {
    
    case 'b':
       decbinario($input1,$input2);
    break;

    case 'o':
        decoctal($input1);
    break;

    case 'h':
        dechexadecimal($input1);
    break;

    case 'd':
        bindecimal($input1);
    break;       
    case 'oc':
        octadecimal($input1);
    break;   
    case 'dx':
        hexabinario($input1);
    break;   
    default:
    echo "Seleccione una opcion válida";
    break;
    }
    /*
    switch ($selector2) {
        case 'ok':
           random($input2);
        break;
        default:
    echo "Seleccione una opcion válida";
    break;
   
}
 */
?>