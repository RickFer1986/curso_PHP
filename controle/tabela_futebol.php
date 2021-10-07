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
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    html {
        font-size: 1.0rem;
    }

    form {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    form div {
        margin: 10px;
    }

    .div-button button {
        border-radius: 5px;
        padding: 10px;
        cursor: pointer;
        background-color: #106150;
        color: white;
    }

    .div-button button:hover {
        background-color: #1867C0;
    }

    p {
        text-align: center;
    }

    .estrutura{
        max-width: 800px;
        margin: auto;
    }

    .container {
        max-width: 100%;
        margin: auto;
        background-color: red;
    }

    .menu {
        max-width: 800px;
        margin: auto;
    }

    .ul-fut {
        display: flex;
        justify-content: space-around;
        align-items: center;
        height: 50px;
    }

    .li-fut {
        list-style-type: none;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 0.8rem;
    }

    .li-fut a {
        text-decoration: none;
        color: white;
    }

    .div-menu2 {
        display: flex;
        align-items: center;
        background-color: #303134;
    }

    .form-liga {
        display: block;
        margin-left: 30px;
        margin-right: 10px;
        padding: 10px;
    }

    .form-liga label {
        display: block;
        font-size: 0.8rem;
        margin-bottom: -15px;
        color: #A0A0A1;
    }

    .form-fut select {
        margin-top: -30px;
        color: #4487F6;
        border: none;
    }

    .container2 {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-areas:
            "col-1 col-2"
        ;
        background-color: #202124;
        color: #8A8A8A;
    }

    .col-1 {
        grid-area: col-1;
        height: 40px;
    }
    .col-1 p{
        font-size: 0.8rem;
        text-align: left;
        margin-left: 20px;
    }
    .col-1 ol li{
        font-size: 0.8rem;
    }
    .col-1 ol li img{
        max-width: 25px;
    }

    .col-2 {
        grid-area: col-2;

        display: flex;
        justify-content: space-around;
    }

    .pts {
        font-size: 0.9rem;
    }

    .pj {
        font-size: 0.9rem;
    }

    .vit {
        font-size: 0.9rem;
    }

    .e {
        font-size: 0.9rem;
    }

    .der {
        font-size: 0.9rem;
    }

    .gp {
        font-size: 0.9rem;
    }

    .gc {
        font-size: 0.9rem;
    }

    .sg {
        font-size: 0.9rem;
    }

    .ultimas {
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
<div class="estrutura">
    <div class="div-menu2">
        <form class="form-liga">
            <label>Liga</label>
            <select>
                <option>Premier League</option>
                <option>Liga dos Campeões</option>
                <option>Liga Europa</option>
                <option>Copa dos Campeões Internacionais</option>
            </select>
        </form>
        <form class="form-liga">
            <label>Temporada</label>
            <select>
                <option>2021-22</option>
                <option>2021-22</option>
                <option>2020-21</option>
                <option>2020-21</option>
                <option>2019-20</option>
            </select>
        </form>
    </div>
    <div class="container2">
        <div class="col-1">
            <p>Clube</p>
            <ol>
                <li><img src="../img/chelsea.png" alt="Imagem Chelsea">Chelsea</li>
                <li><img src="../img/liverpool.png" alt="">Liverpool</li>
                <li><img src="../img/city.png" alt="">City</li>
                <li><img src="../img/manchester.png" alt="">Manchester United</li>
                <li><img src="../img/everton.png" alt="">Everton</li>
                <li><img src="../img/brighton.png" alt="">Brighton</li>
                <li><img src="../img/brentford.png" alt="">Brentford</li>
                <li><img src="../img/tottenham.png" alt="">Tottenham</li>
                <li><img src="../img/west.png" alt="">West Ham</li>
                <li><img src="../img/aston.png" alt="">Aston Villa</li>
                <li><img src="../img/arsenal.png" alt="">Arsenal</li>
                <li><img src="../img/wolves.png" alt="">Wolves/li>
                <li><img src="../img/leicester.png" alt="">Leicester City</li>
                <li><img src="../img/crystal.png" alt="">Crystal Palace</li>
                <li><img src="../img/watford.png" alt="">Watford</li>
                <li><img src="../img/leeds.png" alt="">Leeds</li>
                <li><img src="../img/southampton.png" alt="">Southampton</li>
                <li><img src="../img/burnley.png" alt="">Burley</li>
                <li><img src="../img/newcastle.png" alt="">Newcastle</li>
                <li><img src="../img/norwich.png" alt="">Norwich</li>
            </ol>
        </div>

        <div class="col-2">
            <div class="pts">
                <p>Pts</p>
            </div>
            <div class="pj">
                <p>PJ</p>
            </div>
            <div class="vit">
                <p>VIT</p>
            </div>
            <div class="e">
                <p>E</p>
            </div>
            <div class="der">
                <p>DER</p>
            </div>
            <div class="gp">
                <p>GP</p>
            </div>
            <div class="gc">
                <p>GC</p>
            </div>
            <div class="sg">
                <p>SG</p>
            </div>
            <div class="ultimas">
                <p>Últimas cinco</p>
            </div>
        </div>
    </div>
</div>

<?php

$t1 = $_POST['t1'] === '1';
$t2 = $_POST['t2'] === '1';

//echo "<p>$t1 $t2 </p>";
?>