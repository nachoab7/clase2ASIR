<?php

#recogida de variables
$input1=$_POST["texto1"];
$input2=$_POST["texto2"];
$input3=$_POST["texto3"];
$selector=$_POST["cadena"];

#funciones
function mayusculas($texto1){
   $res=strtoupper($texto1); 
   echo "El texto en mayúsculas es " . $res;
}
function disorder($texto1){
    $res=str_shuffle($texto1);
    echo "El texto en mayúsculas es " . $res;
 }
function arraytext($input1){
    $arraytext=str_split($input1);
    echo "El texto hecho arrray sería: " ;
    print_r($arraytext);
}

function cuentaletras($texto1){
    $res=strlen($texto1);
    echo "El numero de letras es ".$res."<br>";
}
function reemplazar($texto1,$texto2,$texto3){
    $res=str_replace($texto1,$texto2,$texto3);
    Echo "El texto remplazado es ".$res."<br>";
}
#switch
switch ($selector) {
    
    case 'b':
    mayusculas($input1);
    break;

    case 'o':
    disorder($input1);
    break;

    case 'h':
    arraytext($input1);
    break;

    case 'd':
    cuentaletras($input1);
    break;

    case 'r':
    reemplazar($input1,$input2,$input3);
    break;

    default:
    echo "Seleccione una opcion válida";
    break;
}
?>