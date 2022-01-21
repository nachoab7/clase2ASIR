<?php
#enlace de 4.html
include_once "arraysbd.php";
include_once "funciones.php";
$texto=$_POST["vuelo"];

destinos($texto,$arrayciudad);
fabricante($texto,$arrayfabricante);
minutos_totales($texto,$arrayduracion,$num);
media_horas($texto,$arrayduracion);
media_pasajeros($texto,$arraypasajeros);
total_pasajeros($texto,$arraypasajeros,$totalpasajeros);
?>