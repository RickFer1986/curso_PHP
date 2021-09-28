<div class="titulo">Tipo String</div>

<?php
    echo 'Eu sou uma string';
    echo '<br>';
    var_dump("Eu também");
    echo '<br>';
    
    // Concatenação
    echo ("Nós também" . ' somos' . '<br>');
    echo ("Número " . 123);
    echo '<br>', "Também aceito ", "vírgulas";
    echo '<br>';
    echo "'Teste' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\" " . "\\";
    echo '<br>';
    
    // Usando função
    print("Também existe a função print");
    echo '<br>';
    print "Também existe a função print";
    echo '<br>';
    
    // Algumas funções
    echo '<br>' . strtoupper('maximizado');
    echo '<br>' . strtolower('MINIMIZADO');
    echo '<br>' . ucfirst('primeira letra maiúscula');
    echo '<br>' . ucwords('primeira letra maiúscula de cada palavra');
    echo '<br>' . strlen('Quantas letras?');
    echo '<br>' . mb_strlen('Eu também', "UTF-8");
    echo '<br>' . substr('Só uma parte mesmo', 7, 6);
    echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso');
    
?>