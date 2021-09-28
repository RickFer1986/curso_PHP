<div class="titulo">Desafio Variaveis</div>

<?php

$a = 'Nossa';
$nossa = 'Eu';
$eu = 'consegui';
$consegui = 'responder';
$responder = 'esse';
$esse = 'desafio';

echo "$a! {$$a} {$$$a} {$$$$a} {$$$$$a} {$$$$$a}";
echo '<br>';
echo "$a! {$nossa} {$eu} {$consegui} {$responder} {$esse}.";
echo '<br>';
echo "Nossa! Eu consegui  responder esse desafio.";
echo '<br>';

?>