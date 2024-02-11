<?php

    include "conexao.php";
    $id = $_GET['id'] ?? " "; // verificar se existe e se não existe recebe um valor em branco
    $sql = "SELECT * FROM pessoas WHERE codPessoa = $id";
    $dados = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($dados);

?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alterar cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="column">
                <h1>Alterar cadastro</h1>
                <form action="editaScript.php" method="post">
                    <div class="mb-3">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" required value="<?php echo $row['nome'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" name="endereco" value="<?php echo $row['endereco'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" name="telefone" required
                            value="<?php echo $row['telefone'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" required
                            value="<?php echo $row['email'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="dtNascimento">Data de nascimento</label>
                        <input type="date" class="form-control" name="dtNascimento"
                            value="<?php echo $row['dtNascimento'];?>">
                    </div>
                    <div class="mb-3">
                        <input type="Submit" class="btn btn-success" value="Salvar alterações">
                        <input type="hidden" name="id" value="<?php echo $row['codPessoa']?>">

                    </div>
                </form>
                <a href="index.php" class="btn btn-primary">Voltar</a>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>