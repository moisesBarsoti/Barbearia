<?php 
    require_once "conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
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
            color: #fff;
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
            100% {
                position: absolute;
                margin-top: -100rem;
            }
        }


        @keyframes piscando{
            50% {
                background-color: transparent;
            };
            100% {
                position: absolute;
                margin-top: -100rem;
            }
    }
</style>
</head>
<body>
    
    <?php 
    // Entrar

        $emailEntrar = $_POST['emailEntrar'];
        $senhaEntrar = $_POST['senhaEntrar'];

        // Verificação de email e senha
        
        if(isset($emailEntrar) || isset($senhaEntrar)) {
            if(strlen($emailEntrar) == 0) {
                echo "Preencha seu email";
            } else if(strlen($senhaEntrar) == 0) {
                echo "Preencha sua senha";
            } else {
                $email = $conexao->real_escape_string($emailEntrar);
                $senha = $conexao->real_escape_string($senhaEntrar);

                // Verificação do login e da senha
                $sql = "SELECT * FROM tblClientes WHERE emailCliente = '$email' AND senhaCliente='$senha'";
                $query = $conexao->query($sql) or die("Falha na execução do cod SQL: ".$conexao->error);

                $quantidade = $query->num_rows;

                if($quantidade == 1) {
                    $usuario = $query->fetch_assoc();

                    if(isset($_SESSION)) {
                        session_start();
                    }
                    $_SESSION['senhaCliente'] = $usuario['senhaCliente'];
                    $_SESSION['emailCliente'] = $usuario['emailCliente'];

                    header("Location: 40.html");
                } else {
                    echo "Falha ao logar";
                }
            }
        }
        
    ?>
    
</body>
</html>