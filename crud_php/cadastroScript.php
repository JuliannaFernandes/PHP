<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background: url("img/backgrounNatalino.jpg") center/cover;
        background-repeat: no-repeat;

    }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <?php
                //pega as info do arquivo conexao.php
                include"conexao.php";

                //pega as info do form cadastro
                $nome = $_POST ['nome'];
                $endereco = $_POST ['endereco'];
                $telefone = $_POST ['telefone'];
                $email = $_POST ['email'];
                $dtNascimento = $_POST ['dtNascimento'];
                $foto = $_FILES ['foto'];
                $nomeFoto = $foto['name'];

                $sql = "INSERT INTO `pessoas`
                (`nome`, `endereco`, `telefone`, `email`, `dtNascimento`,`foto`) VALUES ('$nome','$endereco','$telefone','$email','$dtNascimento', '$nomeFoto')";

                //função para passar os dados para o banco, Requer dois parâmetros, sendo eles: conexão e a instrução sql.
                if(mysqli_query($conn, $sql)){
                    message("$nome cadastrado com sucesso!",'success');
                }else{
                    message("$nome não foi cadastrado!",'danger');


                }
            ?>
            <a href="index.php" class="btn btn-primary">Voltar para a página de cadastro</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>