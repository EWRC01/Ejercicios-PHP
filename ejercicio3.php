
<?php

$datos= array(
    array(
        "nombre" => "Francisco Garcia",
        "telefono" => "5689741523",
        "correo" => "fgarcia@gmail.com",
    ),
    array(
        "nombre" => "Manuel Salinas",
        "telefono" => "2584369721",
        "correo" => "msalinas@gmail.com",
    ),
    array(
        "nombre" => "Johana Melara",
        "telefono" => "9875147536",
        "correo" => "jmelara@gmail.com",
    )
    );
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
    <div class="container">
        <h1 align="center">Ejercicio 3</h1>
        <br/>
       

    <table class="table table-dark">
    <thead>
            <th>#</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Correo</th>
        </thead>
        <?php
        


        foreach($datos as $key => $value)
        {

        
        

        ?>
        <tr>
            <td>
                <?php echo $key; ?>
            </td>
            <?php foreach($value as $key=>$value)
            {
                ?>
                <td>
                    <?php echo $value;?>
                </td>
                <?php

            }
            ?>
        </tr>

        <?php
        }
        ?>

    </table>
    </div>

</body>
</html>
