<?php
    $dividendo = $_GET['dividendo'];
    $divisor = $_GET['divisor'];
    $resultado = (int) ($dividendo / $divisor);
    $resto = $dividendo % $divisor;

    echo "Dividendo: $dividendo<br>Divisor: $divisor<br>Resultado: $resultado<br>Resto: $resto";
?> 