<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td{
            border: 2px solid black;
            border-collapse:collapse;
            background-color: salmon;

        }
    </style>
</head>
<body>
    <?php
    $dia = date("l");
    $hora = date("G");
    switch ($dia) {
        case 'Monday':
            if ($hora > 8) {
                echo "Estamos en Implantacion de Aplicaciones Web";
            }
            elseif ($hora > 9){
                echo "Estamos en Implantacion de Aplicaciones Web";
            }
            elseif ($hora > 10){
                echo "Estamos en Implantacion de Aplicaciones Web";
            }
            elseif ($hora > 11){
                echo "Estamos en Recreo";
            }
            elseif ($hora > 12){
                echo "Estamos en Servicios en Red";
            }
            elseif ($hora > 13){
                echo "Estamos en Servicios en Red";
            }
            elseif ($hora > 14){
                echo "Estamos en Servicios en Red";
            }
            else{
                echo "Estamos en casita";
            }

            echo "El horario de hoy es el siguiente: "."<br>";
            echo "
            <table>
                 <tr>
                    <td>Aplicaciones Web</td>
                    </tr>
                    <tr>
                    <td>Aplicaciones Web</td>
                    </tr>
                    <tr>
                    <td>Aplicaciones Web</td>
                    </tr>
                    <tr>
                    <td>Recreo</td>
                    </tr>
                    <tr>
                    <td>Servicios en red</td> 
                    </tr>
                    <tr>
                    <td>Servicios en red</td>
                    </tr>
                    <tr>
                    <td>Servicios en red</td>
                    </tr>
                </tr>
            </table>";
            break;
            case 'Tuesday':
                if ($hora == 8) {
                    echo "Estamos en Administracion de Sistemas Operativos";
                }
                elseif ($hora == 9){
                    echo "Estamos en Administracion de Sistemas Operativos";
                }
                elseif ($hora == 10){
                    echo "Estamos en Administracion de Sistemas Operativos";
                }
                elseif ($hora == 11){
                    echo "Estamos en Recreo";
                }
                elseif ($hora == 12){
                    echo "Estamos en Seguridad";
                }
                elseif ($hora == 13){
                    echo "Estamos en Empresa";
                }
                elseif ($hora == 14){
                    echo "Estamos en Empresa";
                }
                else{
                    echo "Estamos en casita";
                    
                }
            
                echo "<br>"." El horario de hoy es el siguiente: "."<br>";
                echo "
                <table>
                     <tr>
                        <td>ASO</td>
                        </tr>
                        <tr>
                        <td>ASO</td>
                        </tr>
                        <tr>
                        <td>ASO</td>
                        </tr>
                        <tr>
                        <td>Recreo</td>
                        </tr>
                        <tr>
                        <td>Seguridad</td>
                        </tr>
                        <tr>
                        <td>Empresa</td>
                        </tr>
                        <tr>
                        <td>Empresa</td>
                        </tr>
                    
                </table> ";
                break;
                if ($hora == 8) {
                    echo "Estamos en Administracion de Sistemas Operativos";
                }
                elseif ($hora == 9){
                    echo "Estamos en Administracion de Sistemas Operativos";
                }
                elseif ($hora == 10){
                    echo "Estamos en Administracion de Sistemas Operativos";
                }
                elseif ($hora == 11){
                    echo "Estamos en Recreo";
                }
                elseif ($hora == 12){
                    echo "Estamos en Servicios en Red";
                }
                elseif ($hora == 13){
                    echo "Estamos en Servicios en Red";
                }
                elseif ($hora == 14){
                    echo "Estamos en Servicios en Red";
                }
                else{
                    echo "Estamos en casita";
                    
                }
                case 'Wednesday':
            
                    echo "<br>" . "El horario de hoy es el siguiente: "."<br>";
                    echo "
                    <table>
                         <tr>
                            <td>ASO</td>
                            </tr>
                            <tr>
                            <td>ASO</td>
                            </tr>
                            <tr>
                            <td>ASO</td>
                            </tr>
                            <tr>
                            <td>Recreo</td>
                            </tr>
                            <tr>
                            <td>Servicios en red</td>
                            </tr>
                            <tr>
                            <td>Servicios en red</td>
                            </tr>
                            <tr>
                            <td>Servicios en red</td>
                        </tr>
                    </table> ";
                    break;
                    case 'Thursday':
                        if ($hora == 8) {
                            echo "Estamos en Base de Datos";
                        }
                        elseif ($hora == 9){
                            echo "Estamos en Base de Datos";
                        }
                        elseif ($hora == 10){
                            echo "Estamos en Base de Datos";
                        }
                        elseif ($hora == 11){
                            echo "Estamos en Recreo";
                        }
                        elseif ($hora == 12){
                            echo "Estamos en Seguridad";
                        }
                        elseif ($hora == 13){
                            echo "Estamos en Ingles";
                        }
                        elseif ($hora == 14){
                            echo "Estamos en Ingles";
                        }
                        else{
                            echo "Estamos en casita";
                            
                        }
            
                        echo "<br>" ."El horario de hoy es el siguiente: "."<br>";
                        echo "
                        <table>
                             <tr>
                                <td>BD</td>
                                </tr>
                                <tr>
                                <td>BD</td>
                                </tr>
                                <tr>
                                <td>BD</td>
                                </tr>
                                <tr>
                                <td>Recreo</td>
                                </tr>
                                <tr>
                                <td>Seguridad</td>
                                </tr>
                                <tr>
                                <td>Seguridad</td>
                                </tr>
                                <tr>
                                <td>Seguridad</td>
                                </tr>
                            </tr>
                        </table> ";
                        break;
                        case 'Friday':
                            if ($hora == 8) {
                                echo "Estamos en Ingles";
                            }
                            elseif ($hora == 9){
                                echo "Estamos en Seguridad";
                            }
                            elseif ($hora == 10){
                                echo "Estamos en Seguridad";
                            }
                            elseif ($hora == 11){
                                echo "Estamos en Recreo";
                            }
                            elseif ($hora == 12){
                                echo "Estamos en Implantacion de Aplicaciones Web";
                            }
                            elseif ($hora == 13){
                                echo "Estamos en Empresa";
                            }
                            elseif ($hora == 14){
                                echo "Estamos en Empresa";
                            }
                            else{
                                echo "Estamos en casita";
                                
                            }
            
                            echo "El horario de hoy es el siguiente: "."<br>";
                            echo "
                            <table>
                                 <tr>
                                    <td>Ingles</td>
                                    </tr>
                                    <tr>
                                    <td>Seguridad</td>
                                    </tr>
                                    <tr>
                                    <td>Seguridad</td>
                                    </tr>
                                    <tr>
                                    <td>Recreo</td>
                                    </tr>
                                    <tr>
                                    <td>Aplicaciones Web</td>
                                    </tr>
                                    <tr>
                                    <td>Empresa</td>
                                    </tr>
                                    <tr>
                                    <td>Empresa</td>
                                </tr>
                            </table> ";
                            break;
                            default:
                            echo "Estamos en fin de semana";
    }
    ?>
    <a href="tablaphp.html">Volver a la página principal</a>
</body>
</html>