<div class="titulo">Criar Banco</div>

<?php

require_once "conexao.php";

$conexao = novaConexao(null);
$sql = 'CREATE DATABASE IF NOT EXISTS curso_php'; // IF NOT EXISTS faz com que não exiba erro.

$resultado = $conexao->query($sql);

if($resultado){
    echo "Sucesso :)";
}else{
    echo "Erro: " . $conexao->error;
}

$conexao->close();










// Criação do Banco de Dados no MySQL
//require_once "conexao.php";

// Criando uma nova conexão
//$conexao = $novaConexao(null);

// Criando um novo esquema do BD
//$sql = 'CREATE DATABASE curso_php';

//$resultado = $conexao->query($sql);

//if($resultado){
  //  echo "Sucesso :)";
//}else{
  //  echo "Erro: " . $conexao->error;
//}

//$conexao->close();