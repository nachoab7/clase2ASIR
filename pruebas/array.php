<?php


#bucle exterior e interior con "for" , similar a crear una tabla

#Bucle anidado de forma independiente
print "<b>BUCLE INDEPENDIENTE</b>"."<br>";
for ($inicio=0; $inicio < 5; $inicio++) { 
    print "<b>Vamos por la interacción inicio: ".$inicio."</b>"."<br>";
   
    for ($inicio2=0; $inicio2 < 5; $inicio2++) { 
        
        print "Vamos por la interacción inicio2: ".$inicio2."<br>";
    }
}
print "<br><br><br>";   
#Bucle anidado de forma dependiente
print "<b>BUCLE DEPENDIENTE</b>"."<br>";
for ($varexterior=0; $varexterior < 5; $varexterior++) { 
    print "<b>.Muestro variable exterior: ".$varexterior."</b>"."<br>";

    for ($varinterior=0; $varinterior <= $varexterior; $varinterior++) { 
        print "Muestro variable interior: ".$varinterior."<br>";
    }
}

#ARRAYS
print "<b><h2>Array estandar</h2></b>";

#forma 1:
$numerosp = array(2,4,6,8,10);
print_r($numerosp);
print "Muestro lo que hay en la posicion 3: ".$numerosp[3]."<br>";

$cuentanumerosp=count($numerosp);
print "Muestro cuantos arrays hay: ".$cuentanumerosp."<br>";

for ($i=0; $i < $cuentanumerosp; $i++) { 
    print "Muestro lo que hay en la posicion : " .$i. " : ".$numerosp[$i]."<br>";
}
echo "<br>";
#Forma 2: no se ponen array por que lo hacemos con corchetes que es directamente mostrando el array
$numerosi = [1,3,5,7,9];
print_r($numerosi);

print "<b><h2>Array asociativos</h2></b>";
$potencias2=[1=>2,2=>4,3=>8];
print_r($potencias2)."<br>";

$capitales=array("Andalucía => Sevilla", "Madrid => Madrid");
print_r($capitales);

#Añadir elementos a un array (Lo pone al final y mueve todas las filas)
$capitales["Capitales"]="Barcelona";
print_r($capitales);

$capitales["Andalucia"]="Estepa";

#reutilizando codigos
echo "<br>";
$cuentaletras=strlen($capitales["Andalucia"]);
echo "El numero de letras es: ".$cuentaletras;



#clase 12 noviembre

$colores1=["Verde","Azul","Amarillo","Rojo","Negro"];
$colores2=["Verde","Azul","Amarillo","Rojo","Blanco"];
echo "<br>";
$resultadoDiferencia=array_diff($colores2,$colores1);
$resultadoUnion=array_merge($colores2,$colores1);
$resultadoInterseccion=array_intersect($colores2,$colores1);
//$acumulador=array("purpura","marron","celeste");
$colores4=array_push($colores2,"purpura","celeste");
print_r($colores4);
echo "<br>";
//$ordenarArrayAlfabeticamente=sort($colores2,SORT_NATURAL);
//print_r($ordenarArrayAlfabeticamente);
echo "<br>";
print_r($resultadoDiferencia);
echo "<br>";
print_r($resultadoUnion);
echo "<br>";
print_r($resultadoInterseccion);
echo "<br>";
print_r($colores4);
echo "<br>";
print_r($colores2);
/*
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
$alumnos = array("Nombre" => "Migue",     
                "Apellidos"=>"Pajero",
                "Edad"=> 25,
                "estaAprobado" => false);
echo $alumnos["Edad"];
*/
?>