<?php
    $salario = $_GET['salario'];
    $salarioMinimo = 1500;
    $resultado = (int) ($salario / $salarioMinimo);
    $resto = ($salario % $salarioMinimo);

    echo "Você ganha $resultado salários mínimos, mais R$$resto,00";
?>