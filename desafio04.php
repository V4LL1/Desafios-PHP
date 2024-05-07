<?php
    $preco = $_GET['preco'];
    $ajuste = $_GET['ajuste'];
    $precoAjustado = $preco + ($preco * $ajuste / 100);

    echo "O preço ajustado é de: $precoAjustado<br>O ajuste foi de $ajuste%";
?> 