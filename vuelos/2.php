<?php 
#en este php se muestra directamente la informacion del segundo apartado
include_once "arraysbd.php";
include_once "funciones.php";

total_pasajeros_todo($arraypasajeros,$totalpasajeros);
media_horas_todos_vuelos($arrayduracion);
fabricantes_de_aviones($arrayfabricante);


?>