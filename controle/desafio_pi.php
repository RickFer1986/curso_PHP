<div class="titulo">Desafio PI</div>

<?php

echo pi();
$pi = 3.14;

echo '<br>$pi';

if($pi === pi()){
    echo "<br> Iguais";
}else{
    echo "<br> Diferente";
}

echo "<br>-----------------------------------";

// Resposta
if($pi - pi() <= 0.01){
    echo '<br> Praticamente iguais';
}

if($pi - $piErrado <= 0.01){
    echo '<br> Praticamente iguais!';
}else{
    echo '<br> Valor errado!';
}

?>