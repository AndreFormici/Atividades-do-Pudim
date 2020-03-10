<?php
 include "conn.php";
    $nome = $_POST ['nome'];
    $email = $_POST ['email'];
    $senha = $_POST ['senha'];
    $usuario = $_POST ['user'];
    $sql = "insert INTO cadastros(nome, email, senha, usuario) values('$nome', '$email', '$senha', '$usuario')";
    if($conn->query($sql) == true){
        header("location: login.php");
    }
    else{
        header("location: cadastro.php");
    }
?>