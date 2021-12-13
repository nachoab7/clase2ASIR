<?php


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

?>