<?php

require_once './assets/acoes/conexao.php';
ini_set('default_charset', 'UTF-8');
$dados['cep'] = NULL;
$dados['logradouro'] = NULL;
$dados['complemento'] = NULL;
$dados['bairro'] = NULL;
$dados['localidade'] = NULL;
$dados['uf'] = NULL;
$dados['ibge'] = NULL;
$dados['gia'] = NULL;
$dados['ddd'] = NULL;
$dados['siafi'] = NULL;
$error = NULL;

if(isset($_GET['error']))
{
    $error = 1;
}

if (isset($_GET['cep'])) {
    $cepconsulta =  $_GET['cep'];
    $sql = "SELECT * FROM ceps WHERE cep = '$cepconsulta';";
    $result = mysqli_query($con, $sql);
    $dados = mysqli_fetch_array($result);
    //var_dump($dados);
}

?>