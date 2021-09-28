<div class="titulo">Conversões</div>

<?php
    echo is_int(PHP_INT_MAX);

    // Converter INT para Float
    echo '<p>Converter INT para Float</p>';
    var_dump(PHP_INT_MAX + 1);
    echo '<br>';
    var_dump(1 + 1.0);
    echo '<br>';
    var_dump((float) 3);
    
    // Converter Float para INT
    echo '<p>Converter Float para INT</p>';
    var_dump((int) 6.8);
    echo '<br>';
    var_dump(intval(2.999));
    echo '<br>';
    var_dump((int) round(2.8));
    echo '<br>';
    
    // Operações com String
    echo '<p>Operações com String</p>';
    var_dump(3 + "2");
    echo '<br>';
    var_dump("3" + 2);
    echo '<br>';
    var_dump("3" . 2);
    echo '<br>', is_string("3" . 2);
    //echo '<br>', is_string("3" + 2);    
    echo '<br>';
    var_dump(1 + "cinco");
    echo '<br>';
    var_dump(1 + "5 cinco"); // Evitar    
    echo '<br>';
    var_dump(1 + "cinco 5"); // Evitar
    echo '<br>';
    var_dump(1 + "2+5");    
    echo '<br>';
    var_dump(1 + "3.2");    
    echo '<br>';
    var_dump(1 + "-3.2e2");    
    echo '<br>';
    var_dump((int) "10.5");
    echo '<br>';
    var_dump((float) "10.5");






?>