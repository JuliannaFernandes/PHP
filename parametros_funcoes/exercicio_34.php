<?php

function imparPar($numero) {
    if ($numero % 2 == 0) {
        echo 'O número ' . $numero . ' é par <br>';
    } else {
        echo 'O número ' . $numero . ' é ímpar <br>';
    }
   
}

imparPar(1);
imparPar(5);
imparPar(8);
imparPar(10);
imparPar(768362746);

?>