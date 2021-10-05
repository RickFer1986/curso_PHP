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

<style>
    html{
        font-size: 1.0rem;
    }
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
    .container{
        max-width: 100%;
        margin: auto;
        background-color: red;
    }
    .menu{
        max-width: 700px;
        margin: auto;
    }
    .ul-fut{
        display: flex;
        justify-content: space-around;
        max-height: 80px;
    }
    .li-fut{
        list-style-type: none;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 0.8rem;
    }
    .li-fut a{
        text-decoration: none;
        color: white;
    }
    .container2{
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-areas: 
        "col-1 col-2"
        ;
    }
    .col-1{
        grid-area: col-1;
        border: 1px solid red;
    }
    .col-2{
        grid-area: col-2;
        border: 1px solid red;

        display: flex;
        justify-content: space-around;
        grid-template-columns: 5px 5px 5px 5px 5px 5px 5px 5px 15px;
        grid-template-areas: 
        "pts pj vit e der gp gc sg ultimas"
        ;
    }
    .pts{
        grid-area: pts;
        font-size: 0.9rem;
    }
    .pj{
        grid-area: pj;
        font-size: 0.9rem;
    }
    .vit{
        grid-area: vit;
        font-size: 0.9rem;
    }
    .e{
        grid-area: e;
        font-size: 0.9rem;
    }
    .der{
        grid-area: der;
        font-size: 0.9rem;
    }
    .gp{
        grid-area: gp;
        font-size: 0.9rem;
    }
    .gc{
        grid-area: gc;
        font-size: 0.9rem;
    }
    .sg{
        grid-area: sg;
        font-size: 0.9rem;
    }
    .ultimas{
        grid-area: ultimas;
        font-size: 0.9rem;
    }

</style>
<header class="container">
    <nav class="menu">
        <ul class="ul-fut">
            <li class="li-fut"><a href="#">partida</a></li>
            <li class="li-fut"><a href="#">classificação</a></li>
            <li class="li-fut"><a href="#">jogadores</a></li>
        </ul>
    </nav>
</header>
<div class="container2">
    <div class="col-1">
        <form class="form-fut">
            <select>
                <label>Liga</label>
                <option>Premier League</option>
                <option>Liga dos Campeões</option>
                <option>Liga Europa</option>
                <option>Copa dos Campeões Internacionais</option>
            </select>
        </form>
    </div>

    <div class="col-2">
        <div class="pts"><p>Pts</p></div>
        <div class="pj"><p>PJ</p></div>
        <div class="vit"><p>VIT</p></div>
        <div class="e"><p>E</p></div>
        <div class="der"><p>DER</p></div>
        <div class="gp"><p>GP</p></div>
        <div class="gc"><p>GC</p></div>
        <div class="sg"><p>SG</p></div>
        <div class="ultimas"><p>Últimas cinco</p></div>
    </div>
        
</div>


<?php

$t1 = $_POST['t1'] === '1';
$t2 = $_POST['t2'] === '1';

echo "<p>$t1 $t2 </p>";
?>