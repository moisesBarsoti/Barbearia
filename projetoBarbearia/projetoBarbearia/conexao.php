<?php 
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "bdClientes";

    $conexao = mysqli_connect($servidor,$usuario,$senha,$banco);

    // if($conexao === false) {
    //     echo "ERRO";
    // } else {
    //     echo "Certo";
    //  }
?>