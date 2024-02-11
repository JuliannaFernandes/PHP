<?php
    $host = "localhost"; //servidor
    $user = "root"; //usuário do sgbd
    $password = ""; //senha do banco
    $bd = "empresa"; //banco de dados que será acessado.

    //função para conectar
   if( $conn = mysqli_connect($host, $user, $password, $bd)){
    echo"<script>console.log('conexão realizada com sucesso!');</script>";
   } else{
    echo"<script>console.log('não foi possível realizar a conexão!');</script>";
   }  

   function message ($texto, $tipo){
    echo"<div class='alert alert-$tipo' role='alert'>
            $texto
         </div>";
   }

   function formatoData ($d){
    $d = explode('-', $d);
    $escreve = $d[2] . "/" . $d[1]. "/" . $d[0];
    return $escreve;
   }

?>