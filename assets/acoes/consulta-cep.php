<?php

session_start();
require_once 'conexao.php';
ini_set('default_charset', 'UTF-8');

$cepconsulta =  $_POST["cepconsulta"];

$sql = "SELECT * FROM ceps WHERE cep = '$cepconsulta';"; 

$result = mysqli_query($con, $sql);

$dadosresult = mysqli_fetch_array($result); 

if (!$dadosresult) {

    $xml = simplexml_load_file('http://viacep.com.br/ws/' . $cepconsulta . '/xml/');

    $cep = $xml->cep;
    $logradouro = $xml->logradouro;
    $complemento = $xml->complemento;
    $bairro = $xml->bairro;
    $localidade = $xml->localidade;
    $uf = $xml->uf;
    $ibge = $xml->ibge;
    $gia = $xml->gia;
    $ddd = $xml->ddd;
    $siafi = $xml->siafi;


    $sql = "INSERT INTO ceps (cep, logradouro, complemento, bairro, localidade, uf, ibge, gia, ddd, siafi) VALUES ('$cep', '$logradouro', '$complemento', '$bairro', '$localidade', '$uf', '$ibge', '$gia', '$ddd', '$siafi');";
    
    if (mysqli_query($con, $sql)) {
        //INSERIU NO BANCO
     header('Location: /index.php?cep='.$cep);
    } else {
        //CEP NÃO EXISTE
     header('Location: /index.php?error=true');
    }
} else {

    $cep = $dadosresult['cep'];
    
     header('Location: /index.php?cep='.$cep);
    mysqli_close($con);
}
