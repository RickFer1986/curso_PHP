<div class="titulo">Operações Aritméticas</div>

<?php
    echo 1 + 1, '<br>';
    var_dump(1+1);
    echo '<br>';
    echo 1 + 2.5, '<br>';
    echo 10 - 2, '<br>';
    echo 2 * 5, '<br>';
    echo 7 / 4, '<br>';
    echo intdiv(7,4), '<br>'; // Resultado arrendondado. Numero Inteiro
    echo round(7/4), '<br>'; // Resultado arrendondado para o valor mais próximo para cima
    echo 7 % 4, '<br>';
    echo 7 / 0, '<br>'; // Resultado Infinito - PHP exibe INF
    //echo intdiv(7,0), '<br>'; #ERRO
    echo 4 ** 2, '<br>'; // Exponenciação: 4 elevado a 2 = 16

    // ordem de Precedencia
    // () => ** => / * % => + -

    echo '<p>Ordem de Precedência</p>';
    echo 2 + 3 * 4, '<br>';
    echo (2 + 3) * 4, '<br>';
    echo 2 + 3 * 4 ** 2, '<br>';
    echo ((2 + 3) * 4) ** 2, '<br>';
?>