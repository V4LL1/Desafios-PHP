<?php
    $nota1 = $_GET['nota1'];
    $pesoNota1 = $_GET['pesoNota1'];
    $nota2 = $_GET['nota2'];
    $pesoNota2 = $_GET['pesoNota2'];
    
    $mediaSimples = ($nota1 + $nota2) / 2;
    $mediaPonderada = (($nota1 * $pesoNota1) + ($nota2 * $pesoNota2)) / ($pesoNota1 + $pesoNota2); 

    echo "<strong>Média simples: </strong>$mediaSimples<br><strong>Média ponderada: </strong>$mediaPonderada"
?>