<?php

echo "<br>","<i>","Ejemplo de la fruta con switch";
echo "<hr>", "<br>";

    $fruta = "limon";

    switch ($fruta)
    {
        case "naranja":
        case "limon":
        case "mandarina":
            echo "es una fruta acida";
            break;
        case "banano":
        case "mango":
            echo "es una fruta blanda";
            break;
        case "pera":
        case "manzana":
            echo "es una simple pera manzana";
            break;
            
        default:
            echo "es una fruta desconocida";
    }

    echo "<br>", "<br>";
    
    $edad = 20;
    switch ($edad)
    {
        case ($edad < 16 ):
            echo "no tiedad para trabajar";
            break;
        
        case ($edad >= 16 && $edad < 65 ):
            echo "venga el trabajo te espera";
            break;

        case ($edad >= 65 ):
            echo "disfruta de tu pension";
            break;
    }
?>  

