<div class="titulo">Operadores Relacionais</div>

<?php

var_dump(1 == 1);
echo '<br>';
var_dump(1 > 1);
echo '<br>';
var_dump(1 >= 1);
echo '<br>';
var_dump(4 < 23);
echo '<br>';
var_dump(1 <= 7);
echo '<br>';
var_dump(1 != 1);
echo '<br>';
var_dump(1 <> 1);

echo '<br>';
echo '<br>';
var_dump(111 == '111');
echo '<br>';
var_dump(111 === '111');
echo '<br>';
var_dump(111 != '111');
echo '<br>';
var_dump(111 !== '111');

echo '<br>';
echo '<br>';

echo "<p>Relacionais no If/Else</p><hr>";

$idade = 15;

if($idade < 18){
    echo "Menor idade = $idade anos <br>";
}elseif($idade <= 65){
    echo "Adulto = $idade anos <br>";
}else{
    echo "Terceira idade = $idade anos!";
}

echo '<br>';
echo '<br>';

echo '<p>Spaceship</p><hr>';
var_dump(500 <=> 3);
echo '<br>';
var_dump(50 <=> 50);
echo '<br>';
var_dump(5 <=> 50);
echo '<br>';

echo '<p>Valores podem ser V ou F</p><hr>';
var_dump(!!5);
echo '<br>';
var_dump(!!0);
echo '<br>';
var_dump(!!"");
echo '<br>';
var_dump(!!" ");




?>

<style>
    p{
        margin-bottom: -5px;
    }
    hr{
        margin-top: 0;
    }
</style>