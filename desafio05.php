<?php
    $saque = $_GET['saque']; 
    $contador100 = 0;
    $contador50 = 0;
    $contador20 = 0;
    $contador10 = 0;

    if($saque >= 100){
        $contador100 = (int) ($saque / 100);
        $saque = $saque % 100;
    }
    if($saque >= 50){
        $contador50 = (int) ($saque / 50);
        $saque = $saque % 50;
    }
    if($saque >= 20){
        $contador20 = (int) ($saque / 20);
        $saque = $saque % 20;
    }
    if($saque >= 10){
        $contador10 = (int) ($saque / 10);
        $saque = $saque % 10;
    }

    echo "$contador100 Cédulas de 100<br>$contador50 Cédulas de 50<br>$contador20 Cédulas de 20<br>$contador10 Cédulas de 10<br>";
?>