<?php
#include se escribe tal que así y requited(necesario) el require es mas restrictivo
include "loqsea.php";
require"loquesea.php";

#para qeu si hay un error con varios includes solo te de un error y no se repita se utiliza include_once
include_once "loquesea.php";    

#CONSTANTES
echo "El numero pi es: " . $pi=pi() ."<br>";

define("GRAVEDAD",9.8);

echo  "Constante de la gravedad: " . GRAVEDAD. "<br>";

$numeros= array(2,4,6,8,10,GRAVEDAD);

print_r($numeros);
echo "<br>";
$cantidad_numeros=count($numeros);
echo "El numero de arrays es: ".   $cantidad_numeros."<br>";
$desordena=shuffle($numeros);
echo "El array desordenado es: " . "<br>";
print_r($numeros);
echo "<br>";

for ($i=0; $i < $cantidad_numeros; $i++) { 
    echo "VALOR DE LA POSICION " . $i . " : " . $numeros[$i]  . "<br>";
}

echo "<br> For each <br>";
foreach ($numeros as $numerito) {
    echo $numerito . "<br>";
}



echo "Array asociativo"."<br>";

$provincias=array(
"Andalucia"=> "Sevilla"
,"Madrid" => "Madrid",
"Aragon"=>"Zaragoza",
"Pais Vasco"=>"Bilbao"
);
echo "<br>";
print_r($provincias);

echo "<br>"."<br>";
echo "Comunidades autonomas y sus capitales: " . "<br>";
foreach ($provincias as $provincitas => $capital) {
    
    echo $provincitas . " => ". $capital . "<br>";
}

#Añadir valores en arrays normales, usamos el de arriba si entre los corchetes pones un 0 machacaria esa posicion y lo sustituiria, si no ponemos nada se pone en la ultima posicion del array
echo "<br>"."<br>";
$numeros[0]=3;
echo "<br> Añadir valores <br>";
foreach ($numeros as $numerito) {
    echo $numerito . "<br>";
}
#Eliminar un valor de un array
unset($numeros[6]);

#array multidimensional (es un array que contiene arrays asociativos)
$asir=array(
    array("Nombre" => "Nacho","Frase" => "Gusano Morris"),
    array("Nombre" => "Manule","Frase" => "TELA"),
    array("Nombre" => "kerry","Frase" => "au au au"),
    array("Nombre" => "Migue","Frase" => "Los porroooooo")

);

print_r($asir);
echo "<br>"."<br>";
foreach ($asir as $alumno) {
    echo "Frases tipicas de ".$alumno["Nombre"].": ".$alumno["Frase"]."<br>";
}

echo "<br>"."<br>";
echo "<br>"."<br>";
#FUNCIONES
$numero1=10;
$numero2=4;

function suma($numero1,$numero2){
    $res=$numero1+$numero2;
    #echo "El resultado es " . $res;
    return $res;
}
 $sumador=suma($numero1,$numero2);
 echo $sumador;



 echo "<br>"."<br>";
 echo "Redondear"."<br>";
 echo GRAVEDAD." =>" ;
 $redond=round(GRAVEDAD);
 echo $redond; 


?>