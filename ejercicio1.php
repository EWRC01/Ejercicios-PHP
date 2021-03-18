
<?php
$numero1=$_POST['numero1'];
$numero2=$_POST['numero2'];
$opcion=$_POST['operaciones'];
$resultado=$_POST['respuesta'];

if ($opcion == "a"){
    $resultado = $numero1 + $numero2;
}else if($opcion == b""){
    $resultado = $numero1 - $numero2;
}else if($opcion == "c"){
    $resultado =  $numero1 * $numero2;
} else if($opcion == "d"){
    $resultado = $numero1 / $numero2;
}
echo "<h1>El resultado es: </h1>", "<h1>$resultado</h1>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<button onclick="location.href='calculadora.html'">Volver</button>
</body>
</html>