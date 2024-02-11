<?php
//ARQUIVO DE FUNÇÕES 

function saudacao()
{
    date_default_timezone_set('America/Sao_Paulo');
    $hora = date('H'); 


    if($hora >= 0 && $hora <= 5 ){
        echo'Vai dormir filha da puta agora são: ' . $hora . ' horas'; 
    }
    elseif($hora>= 6 && $hora <= 12){
        echo'Acorda e vai trabalhar filha da puta agora são: ' . $hora . ' horas'; 

    }
    elseif($hora>= 13 && $hora <= 18){
        echo'Vai trabalhar e para de enrolar filha da puta agora são: ' . $hora . ' horas'; 

    }else{
        echo'Vai dormir que amanhã tem mais, agora são: ' . $hora . ' horas'; 

    }
    
}

function resumirTexto($texto, $limite, $continue = '...') //parâmetro ou argumento, é uma variável criada no momento de criação de function. SEMPRE QUE DEFINIR UM PARÂMETRO OBRIGATÓRIAMENTE VOCÊ DEVE PASSAR UM VALOR PARA ELA NA FUNÇÃO

{
    return $texto;
}

?>