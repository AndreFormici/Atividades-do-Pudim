<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'atividade_pudim';

$conn = new mysqli($server, $user, $pass, $database);

if($conn->connect_error){
    die('Falha ao conectar' . $conn->connect_error);
}