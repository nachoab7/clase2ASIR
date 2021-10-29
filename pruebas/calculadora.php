<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$numero1recogida=$_POST["numero1"];
$numero2recogida=$_POST["numero2"];
$numero3recogida=$_POST["numero3"];
$selector=$_POST["operador"];

    #Funcion suma
    function suma($num1,$num2){
     $res=$num1+$num2;
    echo "El resultado es ".$res."<br>";
   }

   #Funcion resta
   function resta($num1,$num2){
    $res=$num1-$num2;
   echo "El resultado es ".$res."<br>";
  }

  #Funcion multiplicacion
   function multiplicacion($num1,$num2){
    $res=$num1*$num2;
   echo "El resultado es ".$res."<br>";
  }

  #Funcion division
  function division($num1,$num2){
    $res=$num1/$num2;
   echo "El resultado es ".$res."<br>";
  }

  #Funcion modulo
  function modulo($num1,$num2){
    $res=$num1%$num2;
   echo "El resultado es ".$res."<br>";
  }
  


  #Funcion elevar al cuadrado
  function cuadrada($num1){
      $res=$num1*$num1;
      echo "El resultado es ".$res."<br>";
  }

  #Funcion elevar al cubo
  function cubo($num1){
    $res=$num1*$num1*$num1;
    echo "El resultado es ".$res."<br>";
}

#Funcion raiz cuadrada
    function rcuadrada($num1){
        $res=sqrt($num1);
        echo "El resultado es ".$res."<br>";    

    }

    #Funcion elevar a una potencia
  function potencia($num1,$num2){
    $res=pow($num1,$num2);
    echo "El resultado es ".$res."<br>";
}
    function fibonacci($fin){
        $contador=0;
        $num1=0;
        $num2=1;
        $num3=0;
       while ($contador<$fin) {
        echo $num1."<br>";
        $num3=$num1+$num2;
        $num1=$num2;
        $num2=$num3;
        $contador++;
       }
    }

    function factorial($numero){
        $factorial = 1;
        for ($i = 1; $i<=$numero; $i++){
            $factorial = $factorial * $i;
        }
        return $factorial;

        $resultado = factorial($numero);
        echo "Factorial de $numero = $resultado";
    }
    
      #Paso 1: Variables method get o post recogida 

  
      #Paso 2: Representar/usar informacion
      #echo "lo que sea";
    switch ($selector) {
    
        case '+':
        suma($numero1recogida,$numero2recogida);
        break;

        case '-':
        resta($numero1recogida,$numero2recogida);
        break;

        case '*':
        multiplicacion($numero1recogida,$numero2recogida);
        break;

        case '/':
        division($numero1recogida,$numero2recogida);
        break;       
        
        case '%':
        modulo($numero1recogida,$numero2recogida);
        break;

        case '√':
        rcuadrada($numero1recogida,$numero2recogida);
        break; 

        case 'x²':
        cuadrada($numero1recogida,$numero2recogida);
        break;
        
        case 'x³':
        cubo($numero1recogida,$numero2recogida);
        break;

        case 'x^x':
        potencia($numero1recogida,$numero3recogida);
        break;    

        case 'fibonacci':
        fibonacci($numero1recogida);
        break;

        case 'factorial':
        factorial($numero1recogida);
        break;

        default:
        echo "Seleccione una opcion válida";
        break;
}
    ?>
   
</body>
</html>