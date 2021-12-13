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

    #Insertamos las funciones en un documento a parte y lo unimos con include
    include 'funcioncadena.php';

    $input1=$_POST["texto1"];
    $input2=$_POST["texto2"];
    $input3=$_POST["texto3"];
    $selector=$_POST["erelleno"];
    
    

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