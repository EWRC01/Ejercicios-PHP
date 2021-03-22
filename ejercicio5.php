<?php




function suma(...$numeros) {
    $acumulador = 0;
    foreach ($numeros as $n)
    {
        $acumulador += $n;
    }
    return "<h1>El resultado de la suma es: " .$acumulador ."</h1>";
}

echo suma(1, 2, 3, 4);



            
?>