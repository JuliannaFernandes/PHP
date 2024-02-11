<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="column">
                <h1>Cadastro</h1>
                <form action="cadastroScript.php" method="post" enctype="multipart/form-data">
                    <!--  //enctype="multipart/form-data" - PARA REALIZAR UPLOAD -->
                    <div class="mb-3">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" name="endereco">
                    </div>
                    <div class="mb-3">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" name="telefone" required>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="dtNascimento">Data de nascimento</label>
                        <input type="date" class="form-control" name="dtNascimento">
                    </div>
                    <div class="mb-3">
                        <label for="foto">Envie uma foto sua</label>
                        <input type="file" class="form-control" name="foto" accept="imagem/*">
                        <!-- accept="imagem - Aceita
                        todos os tipos de imagem. -->
                    </div>
                    <div class="mb-3">
                        <input type="Submit" class="btn btn-success" value="Cadastrar">
                    </div>
                </form>
                <a href="index.php" class="btn btn-primary">Voltar para a página de cadastro</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>