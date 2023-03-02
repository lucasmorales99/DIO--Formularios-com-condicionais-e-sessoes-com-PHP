<?php 
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de inscrição</title>
</head>
<body>
    <p>Formulário para inscricao de competidores</p>
    <form action="script.php" method="post">
        <?php
            $mensageDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
            if(!empty($mensageDeErro)){
                echo $mensageDeErro;
            }
        ?>
        <p>Seu nome? <input type="text" name="nome" /></p>
        <p>Sua idade: <input type="text" name="idade" /></p>
        <p><input type="submit" value="Enviar dados do competidor" /></p>
    </form>
</body>
</html>