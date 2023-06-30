<?php
require_once 'conexao.php';
$nome_animal = $_GET['nome_animal'];
$id_animal = $_GET['id_animal'];
$nome = $_GET['nome'];
$idade = $_GET['idade'];
$cpf = $_GET['cpf'];
$celular = $_GET['celular'];
$endereco = $_GET['endereco'];

// $busca = "SELECT * FROM  tb_animal";
// $resultados = mysqli_query($conexao, $busca);
//             if (mysqli_num_rows($resultados) > 0) {
//                 while ($linha = mysqli_fetch_array($resultados)){
//                     $id = $linha['id'];
//                 }
//             }


$sql = "INSERT INTO tb_adotante (nome, cpf, endereco, celular, idade ) VALUES ('$nome', '$cpf', '$endereco', '$celular', '$idade')";

if (mysqli_query($conexao, $sql)) {
    $id_adotante = mysqli_insert_id($conexao);

    $sql = "INSERT INTO tb_adocao (id_adotante, id_animal ) VALUES ($id_adotante, $id_animal)";
    if (mysqli_query($conexao, $sql)) {
        header('Location: listar_adocao.php');
        exit();
    }
} else {
    header("Location: index.html");
    exit();
}
