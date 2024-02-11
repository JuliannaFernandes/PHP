<?php
//isset - Determina se uma variável está declarada e é diferente de null
// if(isset($_POST['busca'])){
//     $pesquisa = $_POST['busca'];
// }else{
//     $pesquisa = " ";
// }

include "conexao.php";

$pesquisa = $_POST['busca'] ?? " ";

$sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'"; //procurar na tabela PESSOAS ONDE a coluna NOME *começar ou terminar com a letra digitada pelo usuário*

$dados = mysqli_query($conn, $sql); //recebendo os dados do banco.

?>

<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesquisar</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="column">
                <h1>Pesquisa</h1>
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <form class="d-flex" action="pesquisa.php" method="POST">
                            <input class="form-control me-2" type="search" placeholder="Nome" aria-label="Search"
                                name="busca" autofocus>
                            <button class="btn btn-outline-success" type="submit">Pesquisar</button><br>
                        </form>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Endereço</th>
                                    <th scope="col">Telefone</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Data de Nascimento</th>
                                    <th colspan="2" scope="col" style="text-align:center;">Funções</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while($row = mysqli_fetch_assoc($dados)){ //percorre todo o vetor
                                      $codPessoa = $row['codPessoa'];
                                      $nome = $row['nome'];
                                      $endereco = $row['endereco'];
                                      $telefone = $row['telefone'];
                                      $email = $row['email'];
                                      $dtNascimento = $row['dtNascimento'];
                                      $dtNascimento = formatoData($dtNascimento);

                                      echo "<tr>
                                                <th scope='row'>$nome</th>
                                                <td>$endereco</td>
                                                <td>$telefone</td>
                                                <td>$email</td>
                                                <td>$dtNascimento</td>
                                                <td><a href='telaEdita.php?id=$codPessoa' class='btn btn-success btn-sm'>Editar</a></td>
                                                <td><a href='#' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#confirma' onclick=" . '"' . "pegarDados($codPessoa, '$nome')" . '"' . " >Excluir</   a></td>
                                            </tr>";
                                    }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </nav>
                <a href="index.php" class="btn btn-primary">Voltar para a página de cadastro</a>

            </div>
        </div>
    </div>

    <div class="modal fade" id="confirma" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal de confirmação</h1>
                </div>
                <form action="excluiScript.php" method="POST">
                    <div class="modal-body">
                        <p>Tem certeza que deseja excluir <b id="nomePessoa"></b>?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                        <input type="hidden" name="id" id="codPessoa" value="">
                        <input type="hidden" name="nome" id="nomePessoa2" value="">
                        <input type="submit" class="btn btn-danger" value='Excluir' />


                        <!--  -->
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
    function pegarDados(id, nome) {
        document.getElementById('nomePessoa').innerHTML = nome;
        document.getElementById('codPessoa').value = id;
        document.getElementById('nomePessoa2').value = nome;
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>