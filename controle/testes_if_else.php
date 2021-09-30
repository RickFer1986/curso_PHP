<div class="titulo">Testes IF ELSE</div>

<?php

$ligado = true;
$pressButton = false;

echo "TV Ligada?";
echo "<br>";

if($ligado == true){
    echo "Sim <br>";
    echo "Assistindo TV <br>";
}else{
    echo "Não <br>";
    echo "Estou descansando<br>";
}
echo "Pressionando botão?";
echo "<br>";

if($pressButton == true){
    echo "Sim<br>";
    echo "Mudando de canal";
}else{
    echo "Não<br>";
    echo "Deixa quieto";
}


?>