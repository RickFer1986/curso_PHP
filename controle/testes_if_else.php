<div class="titulo">Testes IF ELSE</div>

<!--
    ENERGIA
    Se tiver ENERGIA, e CONECTOR estiver ON e não pressionarem o BOTÃO -> LUZ ACESA
    Se tiver ENERGIA, e CONECTOR estiver ON e pressionarem o BOTÃO -> LUZ APAGADA
    Se tiver ENERGIA, e CONECTOR estiver OFF e não pressionarem o BOTÃO -> LUZ APAGADA
    Se tiver ENERGIA, e CONECTOR estiver OFF e pressionarem o BOTÃO -> LUZ ACESA
    
    Se não tiver ENERGIA -> LUZ APAGADA

    APERTAR BOTÃO
    APERTO BOTÃO -> CONECTOR estiver ON + ENERGIA = LUZ APAGA
    APERTO BOTÃO -> CONECTOR estiver ON NÃO ENERGIA = LUZ APAGADA
    APERTO BOTÃO -> CONECTOR estiver OFF + ENERGIA = LUZ ASCENDE
    APERTO BOTÃO -> CONECTOR estiver OFF NÃO ENERGIA = LUZ APAGADA
    
-->

<form action="#" method="POST">
    <div>
        <label for="energia">Energia</label>
        <select name="energia" id="energia">
            <option value="1">SIM</option>
            <option value="0">NÃO</option>
        </select>
    </div>
    <div>
        <label for="botao">Pressionar Botão?</label>
        <select name="botao" id="botao">
            <option value="1">Yes</option>
            <option value="0">NO</option>
        </select>
    </div>
    <div>
        <label for="conector">Conector</label>
        <select name="conector" id="conector">
            <option value="1">ON</option>
            <option value="0">OFF</option>
        </select>
    </div>

    <button>EXECUTAR</button>

</form>


<?php

$energia = !!$_POST['energia'];
$botao = $_POST['botao'] === '1';
$conector = !!$_POST['conector'];

$statusLuz = '';

// ENERGIA
$faltouEnergia = ($energia == false);

/**
 * LUZ APAGA SE:
 * Não tiver energia;
 * Se não apertar BOTÃO e CONECTOR estiver OFF
 * Se apertar o BOTÃO e CONECTOR estiver ON
 * LUZ ASCENDE SE:
 * Tiver energia e;
 * Se apertar o BOTÃO e CONECTOR estiber OFF;
 * Se não apertar o BOTÃO e CONECTOR esiver ON
 */
// BOTÃO
if($botao == true && $energia == true && $conector == true){
    $statusLuz = "Luz Apaga";
}elseif($botao == true && $energia == true && $conector == false){
    $statusLuz = "Luz Ascende";
}elseif($botao == true && $faltouEnergia){
    $statusLuz = "Faltou energia OOOOOOOOOOOO";
}elseif($botao == false && $energia == true && $conector == true){
    $statusLuz = "Luz Acesa";
}elseif($botao == false && $energia == true || $conector == false){
    $statusLuz = "Luz Apagada";
}

echo $statusLuz;

?>



<style>
    button, select{
        font-size: 1.2rem;
    }
</style>