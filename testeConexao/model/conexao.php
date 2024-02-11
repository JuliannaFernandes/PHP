<?php
    class Conexao
    {
        private $pdo;
        public function __construct($dbname, $host, $user, $senha){
            try {
                $this -> pdo = new PDO ("mysql:dbname=".$dbname.";host=".$host, $user, $senha);
                echo"foi porra <br>";
            } 
            catch (PDOException $e) {
                echo"ERRO DE CONEXÃO NO PDO: ".$e->getMessage();
                exit();
            }
        }    
        
        public function valida($codigo, $nome){
            $teste = $this -> pdo -> prepare("select codigo from teste where codigo = :c");
            // bindvalue le o valor que esta dentro da variavel, faz parte do prepare.
            $teste -> bindValue(":c", $codigo);
            $teste -> execute();

            if($teste -> rowCount()>0){
                echo"<script>alert('Este código já existe')</script>";
            }

            else{
                echo"<script>alert('Código não cadastrado')</script>";
            }
        }
    }
?>