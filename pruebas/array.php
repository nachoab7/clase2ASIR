<?php

$numeros = array (8,3,7,1);
$suspensos = array("Miguel","kerry");
$coches = array("Ferrari","Seat","BMW","Opel","Mercedes");

echo $suspensos [0]."<br>";
echo $numeros[3]."<br>";
echo $coches[1]."<br>";

"<br>"  ;
$cuentacoches=count($coches);
echo "El numero de coches es ".$cuentacoches."<br>";


#$aleatorio=rand(0,4);
$aleatorio=rand(0,$cuentacoches-1);
echo "Coche aleatorio ". $coches[$aleatorio]. "<br>";

$parada=0;


while ($parada < 5) {
    $aleatorio=rand(0,4);
    echo $coches[$aleatorio]."<br>";
    $parada++;  
}


$cochesordenados=sort($coches);
while ($parada < $cuentacoches) {

    $cochesordenados=sort($coches);
    echo $cochesordenados[$parada]."<br>";
    $parada++;  
}

#array asociativos
$alumnos = array("Nombre" => "Migue","kerry",     
                "Apellidos"=>"Pajero",
                "Edad"=> 25,
                "estaAprobado" => false);
echo $alumnos["Edad"];

?>