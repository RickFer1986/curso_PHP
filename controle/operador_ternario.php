<div class="titulo">Operador Ternário</div>

<?php

$idade = 10;
$status;

if($idade >= 18){
    $status = 'Maior idade';
}else{
    $status = 'Menor idade';
}

echo "$status <br>";

// Operador Ternário
$idade = 45;
$status = $idade >=18 ? 'Maior idade' : 'Menor idade';
echo "$status <br>";

// Outra forma (Não recomendado)
$tipoMaiorIdade = $idade >= 18 ? ($idade >=65 ? 'Aposentado' : 'Maior de idade') : 'Menor de idade';
$status = $idade >= 18 ? $tipoMaiorIdade : 'Menor de idade';


?>