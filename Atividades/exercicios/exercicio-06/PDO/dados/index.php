<?php

require_once './connection.php';

$estados = $connection->query("SELECT * FROM estados");
$produtos = $connection->query("SELECT * FROM produtos");

//var_dump($estados->fetchAll());

require './estadosView.php'; 
require './produtosView.php';