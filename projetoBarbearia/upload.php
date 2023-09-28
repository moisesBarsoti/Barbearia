<?php 
    include_once "conexao.php";

    // Mensagem de texto para o usuario

    $msg = false;
    $arquivo = $_FILES['arquivo'];

    if(isset($arquivo)) {
        $extensao = strtolower(substr($arquivo['name'], -4));
        $novoNome = md5(time()). $extensao;
        $diretorio = "upload/";

        header("Location: homeInicio.php");
    };
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <h1>Upload de arquivo</h1>
    <form action="#" method="POST" enctype="multipart/form-date">
        <label for="arquivo">Arquivo</label>
        <input type="file" required name="arquivo">
        <button type="submit" value="salvar">Enviar</button>
</form>
</body>
</html>