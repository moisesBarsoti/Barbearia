<?php 
    require_once "conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            transition: .5s;
            font-family: sans-serif,Arial, Helvetica, sans-serif;
        }


        body {
            background: linear-gradient(
                to top,
                #ccc,
                #060c21 90%
            );
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }


        /* H1 que está dentro do php */

        #teste {
            position: absolute;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }


        /* Animação */

        h1 {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: -47rem;
            font-family: monospace;
            box-shadow: 0 0 10px #0eb;
            width: 30ch;
            white-space: nowrap;
            overflow: hidden;
            animation: digitando 2s steps(30),
            piscando .10s infinite step-end alternate;
        }


        @keyframes digitando{
            0% {
                width: 0;
            };
        }


        @keyframes piscando{
            50% {
                background-color: transparent;
            };
    }
</style>
</head>
<body>
    
    <?php 
    // Cadastro

        $emailCadastrar = $_POST['email'];
        $senhaCadastrar = $_POST['senha'];
        $nomeCadastrar = $_POST['nome'];
        echo "<h1 id='teste'>Seja bem vindo $nomeCadastrar</h1>";
        echo "<h1 id='teste'>Seja bem vindo $nomeCadastrar</h1>";

        if(isset($nomeCadastrar)) {
            $cliente = "INSERT INTO tblClientes(nomeCliente,emailCliente,senhaCliente) VALUE('$nomeCadastrar','$emailCadastrar','$senhaCadastrar')";
            
            $query = mysqli_query($conexao,$cliente);
            header("Location: 404.html");
        };
    ?>
    
</body>
</html>