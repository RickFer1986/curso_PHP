<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    form{
        font-size: 1.0rem;
    }
</style>
<div class="titulo">Formulário</div>

<h2>Cadastro</h2>


<?php

// Validando Nome (Preenchimento obrigatório)
if(count($_POST) > 0){
    $erros = [];
    // Verificando se o nome foi setado, caso não da a mensagem de erro
    // da pra usar isso: isset($_POST['nome']) 
    if(!filter_input(INPUT_POST, "nome")){
        $erros ['nome'] = 'Nome é obrigatório';
    }

    // Validando data
if(filter_input(INPUT_POST, "nascimento")){
    $data = DateTime::createFromFormat('d/m/Y', $_POST['nascimento']);
    if(!$data){
        $erros ['nascimento'] = 'Data deve está no padrão dd/mm/aa';
    }
}

// Validando E-mail
if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $erros ['email'] = 'E-mail inválido';
}

// Validando URL
if(!filter_var($_POST['site'], FILTER_VALIDATE_URL)){
    $erros ['site'] = 'Site inválido';
}

// Validando Quantidade de filhos
$filhosConfig = ["options" => ["min_range" => 0, "max_range" => 20]];
if(!filter_var($_POST['filhos'], FILTER_VALIDATE_INT, $filhosConfig) && $_POST['filhos'] != 0){
    $erros ['filhos'] = 'Quantidade de filhos inválido';
}

// Validando Salário
$salarioConfig = ['options' => ['decimal' => ',']];
if(!filter_var($_POST['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)){
    $erros ['salario'] = 'Salário inválido';
}


}

?>

<?php foreach($erros as $erro): ?>
    <!--<div class="alert alert-danger" role="alert"> -->
        <?= "" //$erro ?>
    <!-- </div> -->
<?php endforeach ?>




<form action="#" method="POST">
    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input type="text" class="form-control <?= $erros['nome'] ? 'is-invalid' : '' ?>" id="nome" name="nome" value="<?= $_POST['nome'] ?>" placeholder="Nome">
            <div class="invalid-feedback">
                <?= $erros['nome'] ?>
            </div>
        </div>
        <div class="form-group col-md-3">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control <?= $erros['nascimento'] ? 'is-invalid' : '' ?>" id="nascimento" name="nascimento" <?= $_POST['nascimento'] ?> placeholder="Nascimento">
            <div class="invalid-feedback">
                <?= $erros['nascimento'] ?>
            </div>

        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control <?= $erros['email'] ? 'is-invalid' : '' ?>" id="email" name="email" placeholder="E-mail" <?= $_POST['email'] ?>>
            <div class="invalid-feedback">
                <?= $erros['email'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control <?= $erros['site'] ? 'is-invalid' : '' ?>" id="site" name="site" placeholder="Site" <?= $_POST['site'] ?>>
            <div class="invalid-feedback">
                <?= $erros['site'] ?>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Qtde de Filhos</label>
            <input type="number" class="form-control <?= $erros['filhos'] ? 'is-invalid' : '' ?>" id="filhos" name="filhos" placeholder="Qtde de Filhos" <?= $_POST['filhos'] ?>>
            <div class="invalid-feedback">
                <?= $erros['filhos'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" class="form-control <?= $erros['salario'] ? 'is-invalid' : '' ?>" id="salario" name="salario" placeholder="Salário" <?= $_POST['salario'] ?>>
            <div class="invalid-feedback">
                <?= $erros['salario'] ?>
            </div>
        </div>
    </div>

    <button class="btn btn-primary">Enviar</button>
</form>