<div class="titulo">Testes IF ELSE</div>

<?php

$luzLigada = "Ligada";
$luzDesligada = "Desligada";

$botaoON = $luzLigada;
$botaoOFF = $luzDesligada;

echo "Luz: " . $botaoON;
echo "<br>";
echo "Luz: " . $botaoOFF;


echo "<br>";
$energia = false;
$pressButton = true;
$statusButton = '';

// ENERGIA
if($energia == false){
    $statusEnergia = $luzDesligada;
}elseif($energia == true && $botaoON){
    $statusEnergia = $luzLigada;
}elseif($energia == true && $botaoOFF){
    $statusEnergia = $luzDesligada;
}


// MEXENDO NO BOTÃO
if($botaoON == $pressButton){
    $statusButton = $botaoOFF;
}elseif($botaoOFF == $pressButton){
    $statusButton = $botaoON;
}else{
    echo "Nada acontece";
}



if($pressButton == $botaoON && $energia == true && $luzLigada == false){
    $status = "Ligada";
}elseif($pressButton == true && $luzLigada == true){
    $status = "Apagada";
}


echo "Status da luz: " . $status;




?>