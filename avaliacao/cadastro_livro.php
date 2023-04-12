<?php

require 'validaAcesso.php';
validaAcesso();

?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta titulo="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 700px; padding: 20px; }
    </style>
    <title>Insira os dados de cadastro do Livro</title>
</head>
<body>

    <div class="wrapper">
        
    <form action = "cadastro.php" method = "post" >

        <h2>Cadastro de Livros</h2>
        <br>
       <label for="titulo">Título do livro:</label><br>
       <input type = "text" id = "titulo" name = "titulo"><br><br>

       <label for="autor">Nome do autor:</label><br>
       <input type="text" id="autor" name = "autor"><br><br>

       <label for="editora">Insira o nome da editora:</label><br>
       <input type="text" id ="editora" name="editora"><br><br>
       
       <label for="isbn">Insira o valor do ISBN:</label><br>
       <input type="text" id="isbn" name="isbn"><br><br>

       <label for="genero">Insira o genero do livro:</label><br>
       <input type="text" id="genero" name="genero"><br><br>

       <input type = "submit" class="btn btn-primary" value="Enviar">

       <a href="ler_cadastros.php" class="btn btn-primary">Ver cadastross</a><br><br>

       <a href="welcome.php" class="btn btn-danger">Página Inicial</a>

       <a href="logout.php" class="btn btn-danger">Sair da conta</a>

    </form>
   </div>

</body>
</html>