<?php

$textorecogida=$_GET["texto1"];
$radio=$_GET["opcion"];

if ($radio>=1) {
    $fichero=fopen("prueba.txt","w") or die ("Fallo al abrir el fichero");
    fwrite($fichero,$textorecogida);
    fclose($fichero);
    echo "Se ha impreso un ticket";
} else {

    echo "Se ha enviado el documento";

}

/*
echo readfile("prueba.txt")."<br>";
echo filesize("prueba.txt");

//APERTURA Y LECTURA DE UN FICHERO

//ABRO EL FICHERO EN UNA DIRECCION DE MEMORIA(FOPEN)
$fichero=fopen("prueba.txt","r") or die ("Fallo al abrir el fichero");

//OBTENGO EL TAMAÑO DEL FICHERO (FILESIZE)
$pesofichero=filesize("prueba.txt");

//REPRESENTO POR PANTALLA EL CONTENIDO, LE DOY $FICHERO Y SU PESO QUE ES $PESOFICHERO PARA QUE FUNCIONE LA FUNCION
echo fread($fichero,$pesofichero);

//CIERRO EL RECURSO QUE ANTES ABRI CON FOPEN UNA VEZ TERMINADO DE REPRESNETAR
fclose($fichero);

//ESCRIBIR EN EL FICHERO AL COPIAR LA LINEA DE $FICHERO CUIDADO POR QUE ESTABA EN MODO LECTURA "r", hay que ponerlo escritura "w"

$fichero=fopen("prueba.txt","w") or die ("Fallo al abrir el fichero");
$nuevotexto="tupac el tuerto";
$nuevotexto2=$texto1;
fwrite($fichero,$nuevotexto);

fclose($fichero);

*/

?>