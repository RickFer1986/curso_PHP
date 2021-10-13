<?php

function novaConexao($banco = 'curso_php'){
    // Acesso ao DB
    $servidor = 'localhost:3306';
    $usuario = 'root';
    $senha = 'root';

    //Criando uma nova instancia do MySQLI
    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    // Verificando se o BD foi conectado
    if($conexao -> connect_error){
        // Duas possibilidades para tratamento de erro
        die('erro: ' . $conexao -> connect_error); // Não usar em projetos reais
        /** 
         * echo('erro: ' . $conexao -> connect_error);
         * exit();
        */
        return $conexao;
        
    }
}