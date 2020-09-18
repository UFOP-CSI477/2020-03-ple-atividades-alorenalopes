<?php

require 'connection.php';

$nome = $_POST['nome'];
$um = $_POST['um'];

if (empty($nome) || empty($um)) {
    die('Informe os dados corretamente!');
}

try {

    $connection->beginTransaction();
    $inserir_produtos = $connection->prepare("INSERT INTO produtos(nome,um) VALUES(:nome, :um)");

    $inserir_produtos->bindParam(':nome', $nome);
    $inserir_produtos->bindParam(':um', $um);

    $inserir_produtos->execute();

    $connection->commit();

    header('Location: produtosViewInsert.php');
    exit();
} catch (Exception $e) {
    $connection->rollBack();
    die("Erro ao inserir o estado:" . $e->getMessage());
}
