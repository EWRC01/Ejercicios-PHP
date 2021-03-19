<?php
    $nombre=$_POST['name'];
    $departamento=$_POST['departamento'];
    $pais=$_POST['pais'];
    $codigo=$_POST['codigo'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Registro de datos</h1>
<div class="container">
    <table class="table table-dark">
        <thead>
            <th>Nombre</th>
            <th>Departamento</th>
            <th>Pais</th>
            <th>Codigo</th>
        </thead>
        <?php
            echo'<tr>';
            echo'<td>';
            echo $nombre;
            echo'</td>';
            echo'<td>';
            echo $departamento;
            echo'</td>';
            echo'<td>';
            echo $pais;
            echo'</td>';
            echo'<td>';
            echo $codigo;
            echo'</td>';
            echo'</tr>';
            echo'<tr>';
        ?>
    </table>
</div>

    
</body>
</html>