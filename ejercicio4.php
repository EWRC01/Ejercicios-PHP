<?php
       $datos = array(
                "Departamentos" => array("R.R.H.H", "Contabilidad", "Finanzas", "Gerencia", "Finanzas", "Contabilidad", "R.R.H.H"),
                "Empleados" => array("Margarita Linares", "Alberto Canizales", "Maria Gomez", "Anastacia Rivera", "Bladimir Romero", "Andrea Robles", "Carmen Rosales"),
                "Salarios" => array(3500, 2000, 2500, 3000, 1000, 3000, 1500)
                
            );
           
            
               

              
           
            
            //$cantidadR1 =(count($datos["Departamentos"]["6"]));
            //$suma1 = $cantidadR + $cantidadR1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="table">
    <table class="table table-dark">
    <thead>
                <th>Departamento</th>
                <th>Empleado</th>
                <th>Salario</th>
    </thead>

    <?php

                $contabilizar  = count($datos["Departamentos"]);
                $contabilizar1  = count($datos["Empleados"]);
               
                       
                       for ($i=0;$i<$contabilizar;$i++)
                       {
                           echo "<td>";
                            echo $datos["Departamentos"][$i];
                            echo  "</td>";
                            echo "<td>";
                            echo $datos["Empleados"][$i];
                            echo  "</td>";
                            echo "<td>";
                            echo $datos["Salarios"][$i];
                            echo  "</td>";
                            echo "</tr>";
                            
                       }                  
  ?>
    </table>
    </div>

    <?php


$promedio = round(array_sum($datos["Salarios"])/$contabilizar);

echo  "<div class='card text-white bg-dark text-center'>";
echo "<div class='card-title'>";
echo "<h2>El salario promedio es: </h2>";
echo "<div class='card-body'>";
echo "<h3>".$promedio."</h3>";
echo "</div>";
echo "</div>";
echo "</div>";
?>
<br/>
<div class="table finances">
<center>
<h3>Cantidad de empleados por departamento</h3>
</center>
<table class="table table-dark">


<thead>
                       <th>R.R.H.H</th>
                       <th>Contabilidad</th>
                       <th>Finanzas</th>
                       <th>Gerencia</th>
</thead>


<tbody>

                           <?php



$condicional = (array_key_exists("R.R.H.H", $datos));
$condiciona2 = (array_key_exists("Contabilidad", $datos));
$condiciona3 = (array_key_exists("Finanzas", $datos));
$condicional4 = (array_key_exists("Gerencia", $datos));
               if ($condicional = TRUE && $condiciona2 = TRUE && $condiciona3 = TRUE && $condicional4 = TRUE )
               {
                echo "<td>";
                echo "<h1>2</h1>";
                echo "</td>";
                echo "<td>";
                echo "<h1>2</h1>";
                echo "</td>";
                echo "<td>";
                echo "<h1>2</h1>";
                echo "</td>";
                echo "<td>";
                echo "<h1>1</h1>";
                echo "</td>";
                echo "</tr>";
               }


?>

</tbody>


</table>
</div>
    </div>
</body>
</html>