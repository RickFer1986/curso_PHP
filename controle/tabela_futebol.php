<div class="titulo">Projeto Tabela Futebol</div>

<form action="#" method="POST">
    <div>
        <label for="t1">Time 01</label>
        <select name="t1" id="t1">
            <option value="1">Opção 01</option>
            <option value="0">Opção02</option>
        </select>
    </div>
    <div>
        <label for="t2">Time 02</label>
        <select name="t2" id="t2">
            <option value="1">Opção 01</option>
            <option value="0">Opção02</option>
        </select>
    </div>
    <div class="div-button">
        <button>PLAY</button>
    </div>
</form>



<?php

$t1 = $_POST['t1'] === '1';
$t2 = $_POST['t2'] === '1';

echo "<p>$t1 $t2 </p>";
?>

<style>
    form{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    form div{
        margin: 10px;
    }
    .div-button button{
        border-radius: 5px;
        padding: 10px;
        cursor: pointer;
        background-color: #106150;
        color: white;
    }
    .div-button button:hover{
        background-color: #1867C0;
    }
    p{
        text-align: center;
    }
</style>