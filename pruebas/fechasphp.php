<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ejercicio de tratamiento de fechas</h2>
    <p>Vamos a aprender a tratar fechas en php y funcionalidades</p>
    <br/>
    <?php
        echo "vamos a trabajar con fechas"."<br>";
        echo "Hoy es ".date("l")."<br>";
        echo "Dime la fecha actual: ".date("d/n/Y")."<br>"."<br>"."<br>"."<br>";
    echo "<strong>Ejercicio ejemplo if</strong>"."<br>";
        $hora =date("H:i:s");
        echo "Es esta hora: $hora"."<br>";
        if($hora<15){
            echo "Lo siento sigo en clases"."<br>"."<br>"."<br>"."<br>";
        }else{
            echo "Estoy en mi puta casa"."<br>";
        }


        echo "<strong>Ejercicio ejemplo if-else</strong>"."<br>";
        
        $segundos=date("s");
        if($segundos<"10"){
            echo "primeros 10 segundos"."<br>";
            echo "Hora: ".$hora;
    
        }elseif($segundos>"50"){
            echo "ultimos 10 segundos"."<br>";
        }else{
            echo "Segundos intermedios"."<br>";
        }
        echo "$hora"."<br>"."<br>"."<br>"."<br>";
        echo "<strong>Ejercicio ejemplo switch</strong>"."<br>";

        $colores ="Rojo";
        switch ($colores) {
            case 'Rojo':
                
                echo "La sangre es de color: " . $colores."<br>";
                break;
            
            case 'Verde':
                
                echo "La hierba es de color: ".$colores."<br>";
                break;
            default:
            #Esto seria el else y se pone default
            echo "El color: ".$colores. " no está registrado";
            break;
        }

    ?>
    <a href="tablaphp1.html">Volver a la pagina principal</a>
</body>
</html>