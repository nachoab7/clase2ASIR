<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $input1=$_POST["texto1"];
    $input2=$_POST["texto2"];
    $input3=$_POST["texto3"];
    $selector=$_POST["erelleno"];
    
    function cuentaletras($text1){
        $res=strlen($text1);
        echo "El numero de letras es ".$res."<br>";
    }
    function cuentapalabras($text1){
    $res=str_word_count($text1);
    echo "El numero de palabras es ".$res."<br>";
    }
    function busqueda($text1,$text2){
    $res=strpos($text1,$text2);
    if ($res==True) {

        echo "La palabra '" . $text2 . "' se encuentra en el texto";

    } else {

        echo "La palabra '" . $text2 . "' no se encuentra en el texto";

    }
   
    }
    function invertir($text1){
        $res=strrev($text1);
    echo "El texto invertido " . $res . "<br>";
    }
    function reemplazar($text1,$text2,$text3){
        $res=str_replace($text1,$text2,$text3);
        Echo "El texto remplazado es ".$res."<br>";
    }
    

    switch ($selector) {
    
        case 'c':
        cuentaletras($input1);
        break;

        case 'p':
        cuentapalabras($input1);
        break;

        case 'b':
        busqueda($input1,$input2);
        break;

        case 't':
        invertir($input1);
        break;

        case 'r':
        reemplazar($input1,$input2,$input3);
        break;

        default:
        echo "Seleccione una opcion válida";
        break;
}
    ?>
</body>
</html>