<?php



if (isset($_POST["infovuelo1"]) && isset($_POST["infovuelo2"])) {
    $selector=$_POST["operador"];

    #Recogidas variables name en html
    #vuelo1
    $infov1=$_POST["infovuelo1"];
        $codigov1=$infov1["codigo1"];
        $origenv1=$infov1["origen1"];
        $destinov1=$infov1["destino1"];
        $preciov1=$infov1["precio1"];
        $fechav1=$infov1["fecha1"];
    
    #vuelo 2
    $infov2=$_POST["infovuelo2"];
        $codigov2=$infov2["codigo2"];
        $origenv2=$infov2["origen2"];
        $destinov2=$infov2["destino2"];
        $preciov2=$infov2["precio2"];
        $fechav2=$infov2["fecha2"];
    
#Funciones
function unir($vuelo1,$vuelo2){
    $resultadoUnion=array_merge($vuelo1,$vuelo2);
    print_r ($resultadoUnion);
    print "Vuelos unidos";
    echo "<br>";
}

function diferencia($vuelo1,$vuelo2){
    $resultadoDiferencia=array_diff($vuelo1,$vuelo2);
    print "Diferencia de vuelos";
    print_r ($resultadoDiferencia);
    echo "<br>";
}

function ordenar($vuelo1,$vuelo2){
    $vuelOrdenado=array_merge($vuelo1,$vuelo2);
    $resultadoOrdenar=sort($vuelOrdenado);
    print "Vuelos ordenados";
    print_r ($resultadoOrdenar);
    echo "<br>";
}

function info($vuelo1,$vuelo2){
    $resultadoInterseccion=array_intersect($vuelo1,$vuelo2);
    print "Datos en común";
    print_r ($resultadoInterseccion);
    echo "<br>";
}

#Case
switch ($selector) {
    
    case 'une':
        unir($infov1,$infov2);
    break;

    case 'dif':
        diferencia($infov1,$infov2);
    break;

    case 'ord':
        ordenar($infov1);
    break;

    case 'info':
        info($infov1,$infov2);
    break;       

    default:
    echo "Seleccione una opcion válida";
    break;
}

}
?>