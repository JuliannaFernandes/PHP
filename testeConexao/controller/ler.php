<?php
    require_once'../model/conexao.php';
    include('../view/formulario.html');// para puxar o alert


    $con = new Conexao ("teste1703", "localhost", "root", "");

    $nome = addslashes($_POST ['txtnome']);
    $codigo = addslashes($_POST ['txtcod']);

    $con -> valida($codigo, $nome);// para chamar o metodo valida
?>