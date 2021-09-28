<div class="titulo">Operadores Lógicos</div>

<?php

echo "<p>Negação Lógica</p><hr>";

var_dump(true);
echo '<br>';
var_dump(!true);

echo "<p>Tabela Verdade 'AND' (E)</p><hr>";

var_dump(true && true);
echo "<br>";
var_dump(true && false);
echo "<br>";
var_dump(false && true);
echo "<br>";
var_dump(false && false);
echo "<br>";

var_dump(true and true);
echo "<br>";
var_dump(true and false);
echo "<br>";
var_dump(false and true);
echo "<br>";
var_dump(false and false);
echo "<br>";

echo "<p>Tabela Verdade 'OR' (OU)</p><hr>";

var_dump(true || true);
echo "<br>";
var_dump(true || false);
echo "<br>";
var_dump(false || true);
echo "<br>";
var_dump(false || false);
echo "<br>";

var_dump(true or true);
echo "<br>";
var_dump(true or false);
echo "<br>";
var_dump(false or true);
echo "<br>";
var_dump(false or false);
echo "<br>";

echo "<p>Tabela Verdade 'XOR' (OU Exclusivo)</p><hr>";

var_dump(true xor true);
echo "<br>";
var_dump(true xor false);
echo "<br>";
var_dump(false xor true);
echo "<br>";
var_dump(false xor false);
echo "<br>";

var_dump(true != true);
echo "<br>";
var_dump(true != false);
echo "<br>";
var_dump(false != true);
echo "<br>";
var_dump(false != false);
echo "<br>";

echo "<p>Exemplo</p><hr>";

$idade = 65;
$sexo = 'M';

$pagouPrevidencia = true;
$criterioHomem = ($idade >= 65 && $sexo == 'M');
$criterioMulher = ($idade >= 60 && $sexo == 'F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;
echo "Pode se aposentar -> $podeSeAposentar.<br>"; 


if($idade >= 60 && $sexo == 'F'){
    echo "Pode se aposentar -> $sexo";
}elseif($idade >= 65 && $sexo == 'M'){
    echo "Pode se aposentar -> $sexo";
}else{
    echo "Vai trabalhar!";
}

?>


<style>
p{
    margin-bottom: 0;
    font-weight: bold;
}

hr{
    margin-top: 0;
}

</style>