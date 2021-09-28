<div class="titulo">Desafio Operadores Lógicos</div>

<!--

    Dois trabalhos -> Terça e Quinta
    - Se os dois forem executados -> TV 50' e Sorvete
    - Se um dos dois forem executados -> TV 32' e Sorvete
    - Se nenhum for executado -> Fica em casa!!!

-->

<form action="#" method="POST">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>

    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>




<?php

$t1 = $_POST['t1'] === '1'; // True
$t2 = !!$_POST['t2']; // True ou False de acordo com que vier do T2

// Obs: a única String não vazia que retorna False é o zero. Sendo assim o zero é pra False e 1 é pra True

$tv = '';
$sorvete = false;

// Lógica para compra das TVs

if($t1 && $t2){
    $tv = '50"';
}elseif($t1 xor $t2){
    $tv = '32"';
}

// Lógica para compra dos sorvetes

if($t1 || $t2){
    $sorvete = true;
}

// Lógica pra saber se vai ou não comprar a TV
if($tv){
    $resultado = "Vamos comprar uma TV de $tv";
}else{
    $resultado = "Sem TV dessa vez :(";
}

// Lógica pra saber se vai ou não comprar Sorvete

$saudavel = !$sorvete;

if($saudavel){
    $resultado .= '<br> Estamos mais saudáveis';
}else{
    $resultado .= '<br> Sorvete liberado \o/';
}

echo "<p>$resultado</p>";













// Minha forma
/** 
 * 
 *echo $_POST['t1'];
 *echo $_POST['t2'];
 *
 *echo "<br>";
 *
 *
 *$trabalhoTerca = false;
 *$trabalhoQuarta = false;
 *$trabalhoOk = false;
 *
 *
 *if($trabalhoTerca && $trabalhoQuarta == $trabalhoOk){
 *   echo "Vamos comprar a TV de 50' e tomar sorvete";
 *  }elseif($trabalhoTerca || $trabalhoQuarta == $trabalhoOk){
 *       echo "Vamos comprar a TV de 32' e tomar sorvete";
 *   }else{
 *       echo "Vamos ficar em casa";
 *   }
 * 
 */
    
    
    ?>
    
    

<style>

button, select{
    font-size: 1.8rem;
}



p{
    margin-bottom: 0;
    font-weight: bold;
}

hr{
    margin-top: 0;
}

</style>