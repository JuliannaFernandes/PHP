<?php

echo "<h1>Parâmetros em funções</h1><h3>Exemplos:</h3>";
// funções com parâmetros
function velocidadeMaxima($velocidade) {
    if (is_int($velocidade)) {
        echo 'A velocidade máxima é: ' . $velocidade . ' km/h <br>';
    } else {
        echo 'O valor informado não é um número inteiro <br>';
    }
}

velocidadeMaxima(120);
velocidadeMaxima(160);
velocidadeMaxima(200);
velocidadeMaxima(240);
velocidadeMaxima('teste');

echo "<br>";
// funções com mais de um parâmetro
function marcaCarro($marca, $carro) {
    echo 'A marca do carro ' . $carro . ' é: ' . $marca . '<br>';
}

marcaCarro('Fiat', 'Uno');
marcaCarro('Chevrolet', 'Celta');
marcaCarro('Ford', 'Ka');
marcaCarro('Volkswagen', 'Gol');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parâmetros</title>
</head>
<body>
<hr>
<h3>Exercícios:</h3>
    <ul>
        <li><a href="exercicio_33.php">Exercicio 33</a></li>
        <li><a href="exercicio_34.php">Exercicio 34</a></li>
        <li><a href=""></a></li>
    </ul>
</body>
</html>