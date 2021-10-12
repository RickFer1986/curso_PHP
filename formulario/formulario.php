<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    form{
        font-size: 1.0rem;
    }
</style>
<div class="titulo">Formulário</div>

<h2>Cadastro</h2>


<?php

if(count($_POST) > 0){
    // Verificando se o nome foi setado, caso não da a mensagem de erro
    // da pra usar isso: isset($_POST['nome']) 
    if(!filter_input(INPUT_POST, "nome")){
        echo 'Nome é obrigatório', '<br>';
    }
}

if(filter_input(INPUT_POST, "nascimento")){
    $data = DateTime::createFromFormat('d/m/Y', $_POST['nascimento']);
    if(!$data){
        echo 'Data deve está no padrão dd/mm/aaaa', '<br>';
    }
}



?>




<form action="#" method="POST">
    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?= $_POST['nome'] ?>" placeholder="Nome">

        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control" id="nascimento" name="nascimento" <?= $_POST['nascimento'] ?> placeholder="Nascimento">

        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" <?= $_POST['email'] ?>>

        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control" id="site" name="site" placeholder="Site" <?= $_POST['site'] ?>>

        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Qtde de Filhos</label>
            <input type="text" class="form-control" id="filhos" name="filhos" placeholder="Qtde de Filhos" <?= $_POST['filhos'] ?>>

        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" class="form-control" id="salario" name="salario" placeholder="Salário" <?= $_POST['salario'] ?>>

        </div>
    </div>
    <button class="btn btn-primary">Enviar</button>
</form>