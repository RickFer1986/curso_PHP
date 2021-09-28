<div class="titulo">Variáveis</div>

<?php

    $numeroA = 13;
    echo $numeroA;
    echo '<br>';
    var_dump($numeroA);
    
    echo '<br>';
    
    $a = 3;
    $b = 16;
    $soma = $a + $b;
    echo $soma;
    
    echo '<br>';
    echo isset($soma);
    unset($soma);
    echo '<br>';
    var_dump($soma);
    
    echo '<br>';
    $variavel = 10;
    echo $variavel;
    echo '<br>';
    $variavel = "Agora sou uma String!";
    echo $variavel;

    ?>