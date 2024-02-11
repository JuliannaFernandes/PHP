<?php
//ARQUIVO INDEX RESPONSÁVEL PELA INICIAÇÃO DO SISTEMA 

//include'config.php'; //inclui a página sem verificação de sua existencia. Usado quando tem informações de topo ou rodapé que não tem tanta relevancia

// require 'index.php' //o require tem a mesma função do include, porém ele faz a verificação da existencia do arquivo.Utilizado geralmente quando há uma conexão e configuração

require_once'sistema/config.php'; // - inclui apenas uma vez, ou seja, quando eu quero que o arquivo seja aberto somente uma vez no meu sistema

include_once'function.php';

$texto = 'texto para resumir';  

// declare(strict_types = 1); - para declarar um tipo especifico de dado

/* TIPOS DE DADOS */

$string = 'texto';
$int = 50;
$float = 9.99;
$bool= false; //or true
$null = null;   

var_dump($string); // para verificar o tipo de dado
echo'<hr/>';


echo saudacao();
echo'<hr/>';
echo resumirTexto($texto, 50);



?>