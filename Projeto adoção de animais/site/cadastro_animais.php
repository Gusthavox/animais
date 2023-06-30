<?php
require_once 'conexao.php';

$especie = $_GET['especie'];
$raca = $_GET['raca'];
$sexo = $_GET['sexo'];
$cor = $_GET['cor'];
$nome_animal = $_GET['nome_animal'];

$sql = "INSERT INTO tb_animal (especie, raca, sexo, cor, nome_animal) VALUES ('$especie', '$raca', '$sexo', '$cor', '$nome_animal')";

if (mysqli_query($conexao, $sql)) {
    header('Location: animais.php');
    exit();
} else {
    header("Location: index.html");
    exit();
}

?>
