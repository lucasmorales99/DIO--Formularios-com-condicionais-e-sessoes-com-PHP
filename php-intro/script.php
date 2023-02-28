<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

$nome = $_POST['$nome']; //ESTE ARQUIVO IRA PEGAR QUALQUER INFORMAÇÃO PARA O POST
$idade = $_POST['$idade'];

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