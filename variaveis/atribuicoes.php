<div class="titulo">Atribuições</div>

<?php

    $title = 'Atribuicoes';

    $numero = 10;
    echo '<br>' . $numero;
    $numero = $numero - 3;
    echo '<br>' . $numero;
    $numero = $numero + 1.5;
    echo '<br>' . $numero;
    $numero --;
    -- $numero;
    echo '<br>' . $numero;
    $numero ++;
    ++ $numero;
    echo '<br>' . $numero;
    $numero = 20;
    echo '<br>' . $numero;
    $numero -= 5;
    echo '<br>' . $numero;
    $numero += 5;    
    echo '<br>' . $numero;
    $numero *= 10;
    echo '<br>' . $numero;
    $numero /= 2;
    echo '<br>' . $numero;
    $numero %= 6;
    echo '<br>' . $numero;
    $numero **= 4;
    echo '<br>' . $numero;
    $numero .= 4;  // Apenas concatenação    
    echo '<br>' . $numero;

    $texto = 'Esse é um texto';
    echo '<br>' . $texto;
    $texto = $texto . ' Qualquer';
    echo '<br>' . $texto;
    $texto .= ' de verdade!';
    echo '<br>' . $texto;

    // $varialvelInexistente = 'valor existente';
    echo '<br>' . $varialvelInexistente;
    $valor = $varialvelInexistente ?? 'valor default';
    echo '<br>' . $valor;




    ?>