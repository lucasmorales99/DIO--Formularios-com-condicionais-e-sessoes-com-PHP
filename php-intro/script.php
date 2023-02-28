<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

$nome = $_POST['$nome']; //ESTE ARQUIVO IRA PEGAR QUALQUER INFORMAÇÃO PARA O POST
$idade = $_POST['$idade'];

if(empty($nome)){
    echo 'O nome não pode ser vazio';
    return;
}
if(strlen($nome)<3){
    echo 'O nome deve ter mais que 3 caracteres';
    return;
}
if(strlen($nome) > 60){
    echo 'O nome é muito extenso';
    return;
}
//var_dump($nome); //para saber oque vem na variavel
//var_dump($idade);

if($idade >= 0 && idade<= 12)
{
    for($i = 0; $i <=count($categorias); $i++){
        if($categorias[$i] == 'infantil')
            echo "O nadador ", $nome, "compete na categoria", $categorias[$i];
    }
}else if($idade >= 13 && $idade <= 18){
    for($i = 0; $i <=count($categorias); $i++){
        if($categorias[$i] == 'adolescente')
        echo "O nadador ", $nome, "compete na categoria", $categorias[$i];
    }
}else
{
    for($i = 0; $i <=count($categorias); $i++){
        if($categorias[$i] == 'adulto')
        echo "O nadador ", $nome, "compete na categoria", $categorias[$i];
    }
}