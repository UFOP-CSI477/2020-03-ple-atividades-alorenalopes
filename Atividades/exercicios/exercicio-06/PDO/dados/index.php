<?php

require_once './connection.php';

$estados = $connection->query("SELECT * FROM estados");

//var_dump($estados->fetchAll());

require './estadosView.php'; 