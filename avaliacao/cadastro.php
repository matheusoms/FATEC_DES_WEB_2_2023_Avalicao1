<?php

require 'validaAcesso.php';
validaAcesso();

print_r($_POST);

$filename = "biblioteca.txt";

if(!file_exists('biblioteca.txt')){
    $handle=  fopen('biblioteca.txt','w');
 }else{
     $handle = fopen('biblioteca.txt','a');
 }


if(is_string($_POST['titulo'])&& $_POST['titulo'] != " "){
    print $_POST['titulo'];
    print "\n";
    fwrite($handle,$_POST['titulo']);
    fwrite($handle,",");

    fflush($handle);
}else{
    print "Nao pode ser vazio";
}

if(is_string($_POST['autor'])&& $_POST['autor'] != " "){
    print $_POST['autor'];
    print "\n";
    fwrite($handle,$_POST['autor']);
    fwrite($handle,",");

    fflush($handle);
}else{
    print "Nao pode ser vazio";
}

if(is_string($_POST['editora'])&& $_POST['editora'] != " "){
    print $_POST['editora'];
    print "\n";
    fwrite($handle,$_POST['editora']);
    fwrite($handle,",");

    fflush($handle);
}else{
    print "Nao pode ser vazio";
}

if(is_string($_POST['isbn'])&& $_POST['isbn'] != " "){
    print $_POST['isbn'];
    print "\n";
    fwrite($handle,$_POST['isbn']);
    fwrite($handle,",");

    fflush($handle);
}else{
    print "Nao pode ser vazio";
}
    
if(is_string($_POST['genero'])&& $_POST['genero'] != " "){
    print $_POST['genero'];
    print "\n";
    fwrite($handle,$_POST['genero']);

    fflush($handle);
}else{
    print "Nao pode ser vazio";
}
    fwrite($handle, "\n");
    fflush($handle);
    fclose($handle);
?>

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
    <h2>Cadastrado com sucesso!</h2>
    </div>
        <a href="cadastro_livro.php" class="btn btn-primary">Retornar</a>
</body>
</html>
