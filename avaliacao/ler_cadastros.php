
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
    <h1>Lista de livros</h1>
    </div>
        <a href="cadastro_livro.php" class="btn btn-primary">Retornar</a><br><br>

        <a href="welcome.php" class="btn btn-danger">Página Inicial</a>

        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
 
        <br><br>
    </body>
</html>

<?php

require 'validaAcesso.php';
validaAcesso();

$myfile = fopen("biblioteca.txt", "r") or die("Impossivel abrir o arquivo!");

while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}

fclose($myfile);

?>
