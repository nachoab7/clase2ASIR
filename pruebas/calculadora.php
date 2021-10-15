<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <fieldset>
            <legend><h3>Calculadora</h3></legend>
    <label><strong>Número 1</strong></label>
    <input name="numero1" type="text" value=""></input>
    <br/><br>
    <label><strong>Número 2</strong></label>
   
    <input name="numero2" type="text" value=""></input>
    <br>
    <br/>
    <input type="button" name="suma" value="+">
    <input type="button" name="resta" value="-">
    <input type="button" name="multiplicacion" value="*">
    <input type="button" name="division" value="/">
    <input type="button" name="resto" value="%">
    <br><br>
    <input name="reset" type="reset"></input>
    <br><br>
    <input name="solucion" type="submit" value="Resolver"></input>
    <button type="button" id="close" class="closing" onClick="javascript:close_clip()"><img src="manule.png" ></a></button>
    <br/>
   
    
    <a href="tablaphp1.html"><input type="button" value="Inicio"> </a>
</fieldset>
    </form>
    <?php
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

  $prueba1=10;
  $prueba2=2;

  suma($prueba1,$prueba2);
  resta($prueba1,$prueba2);
  multiplicacion($prueba1,$prueba2);
  division($prueba1,$prueba2);
  modulo($prueba1,$prueba2);

    ?>
   
</body>
</html>