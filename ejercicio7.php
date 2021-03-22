<?php

$descomponer = function(){
    $datosAlumnos = array(
        array(
                 "Nombre"=>"Pablo Escobar",
                 "Nota1"=>10,
                 "Nota2"=>4,
                 "Nota3"=>5,
        ),
        array(
         "Nombre"=>"Pablo Geronimo",
         "Nota1"=>10,
         "Nota2"=>7,
         "Nota3"=>8,
     ),
     array(
         "Nombre"=>"Geronimo Escobar",
         "Nota1"=>3,
         "Nota2"=>4,
         "Nota3"=>8,
     ),
     array(
         "Nombre"=>"Gisela Espinosa",
         "Nota1"=>10,
         "Nota2"=>10,
         "Nota3"=>9,
     ),
     array(
         "Nombre"=>"Wilfredo Rodriguez",
         "Nota1"=>10,
         "Nota2"=>1,
         "Nota3"=>6,
     ),
     array(
         "Nombre"=>"Aracely Cabrera",
         "Nota1"=>10,
         "Nota2"=>10,
         "Nota3"=>10,
     ),
     array(
         "Nombre"=>"Edwin Rodriguez",
         "Nota1"=>1,
         "Nota2"=>1,
         "Nota3"=>1,
     ),
     array(
         "Nombre"=>"Hersson",
         "Nota1"=>10,
         "Nota2"=>1,
         "Nota3"=>1,
     ),
     array(
         "Nombre"=>"Enrique Bermudez",
         "Nota1"=>10,
         "Nota2"=>10,
         "Nota3"=>10,
     ),
     array(
         "Nombre"=>"Pablo Galindo",
         "Nota1"=>10,
         "Nota2"=>9,
         "Nota3"=>8,
     ),
        
     );
     echo "<table class='table table-dark' border='1,0'>";
     echo "<thead>";
    echo "<th>Nombre</th>";
    echo "<th>Nota 1</th>";
    echo "<th>Nota 2</th>";
    echo "<th>Nota 3</th>";
    echo "<th>Promedio</th>";
    echo "<th>Observacion</th>";

     echo "</thead>";
     for ($i=0;$i<count($datosAlumnos);$i++)
            {
                echo"<td>" . $datosAlumnos[$i]['Nombre']."</td>";
                echo"<td>" . $datosAlumnos[$i]['Nota1']."</td>";
                echo"<td>" . $datosAlumnos[$i]['Nota2']."</td>";
                echo"<td>" . $datosAlumnos[$i]['Nota3']."</td>";
                $promedio = ($datosAlumnos[$i]['Nota1'] + $datosAlumnos[$i]['Nota2'] + $datosAlumnos[$i]['Nota3'])/3;
                echo"<td>" . round($promedio)."</td>";
                $observascion = '';
                if ($promedio > 7)
                {
                    $observascion = "Aprobado";
                }
                else{
                    $observascion = "Debe mejorar";
                }

                echo"<td>" . $observascion ."</td></tr>";

            }

            echo "</table>";           
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <?php  echo $descomponer(); ?>

  
    
    
</div>
</body>
</html>
















