<?php
    require_once 'conexao.php';

    $nome = $_GET['nome'];
    $cpf = $_GET['cpf'];
    $endereco = $_GET['endereco'];
    $celular = $_GET['celular'];
    $idade = $_GET['idade'];
    $formacao = $_GET['formacao'];

    $sql = "INSERT INTO tb_veterinario (nome, cpf, endereco, celular, idade, formacao) VALUES ('$nome', $cpf, '$endereco', '$celular', '$idade', '$formacao')";

    if (mysqli_query($conexao, $sql)) {
        header('Location: listar_veterinario.php');
        exit();
    } else {
        header("Location: index.html");
        exit();
    }

    ?>
