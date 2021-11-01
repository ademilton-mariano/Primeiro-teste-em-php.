<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';


$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    echo 'O nome não pode ser vazio';
    return ;
}

if(strlen($nome) < 3 || strlen($nome) > 40){
    echo 'O nome deve conter entre 3 e 40 caracteres';
    return;
}

if(!is_numeric($idade)){
    echo 'Informe um número para idadae';   
    return;
}
if($idade >=6 && $idade <=12){
    for($i =0; $i<= count($categorias); $i++){
        if($categorias[$i] =='infantil')
        echo "O nadador " . $nome. " compete na categoria infantil";
    }
}
else if($idade >=13 && $idade <=17){
    for($i =0; $i<= count($categorias); $i++){
        if($categorias[$i] =='adolescente')
        echo "O nadador " . $nome. " compete na categoria adolescente";
    }
}
else if($idade >=18 && $idade <=59){
    for($i =0; $i<= count($categorias); $i++){
        if($categorias[$i] =='adulto')
        echo "O nadador " . $nome. " compete na categoria adulto";
    }
}
else if($idade >=60){
    for($i =0; $i<= count($categorias); $i++){
        if($categorias[$i] =='idoso')
        echo "O nadador " . $nome. " compete na categoria idoso";
}
}