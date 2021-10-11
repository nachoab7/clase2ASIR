<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matemáticas</title>
</head>
<body>
    <?php
    
    echo "Ejemplo de bucle while" . "<br>";

    $numero=0;
    while ($numero <= 10) {
        #Paso 1:Mostrar mi numero
        echo "Mi número es: ".$numero."<br>";
        #$numero++;
        $numero=$numero+1;
        
    }
    echo "Cuenta terminada"."<br>";

    #cuenta de 5 en 5
$numero1=0; 
while ($numero1 <= 100) {
    echo "Cuenta de 5 en 5:  ".$numero1."<br>";
    $numero1=$numero1+5;
}
echo "cuenta terminada" ."<br>";

#cuenta aleatoria
$numero2=0;
$aleatorio=rand(0,100);
while ($numero2 <= $aleatorio) {
    echo "El numero va a ser: ". $numero2."<br>";
    $numero2++;
}
echo "cuenta terminada"."<br>";



for ($cuenta=0; $cuenta <= 10; $cuenta++) { 
    echo "La cuenta es: ".$cuenta."<br>";   
}


function persona($nombre,$edad){

    echo "Su nombre es: ".$nombre;
    if ($edad%2==0) {
        echo "su edad es par"."<br>";
    }else{
        echo "su edad es impar"."<br>";
    }
}
persona("Miguel ",25);
persona("Manule ",24);

echo "<br>"."<br>"."<br>"."<br>";

$alumnos = array("Nacho","Gonzalo","Javi","Adam","Manule","Miguel","JoseAngel","Ivan");
echo "La cantidad de alumnos es: ".count($alumnos)."<br>"; 
$selectaleatorio = rand(0,7);
echo "El alumno es: ".$alumnos[$selectaleatorio];

    ?>
</body>
</html>