<?php
    include "conn.php";
    $nome = $_POST ['nome'];
    $senha = $_POST ['senha'];
    $sql = "SELECT * FROM cadastros WHERE nome = '$nome' AND senha = '$senha'";
    $resultado = $conn->query($sql);
    if($resultado->num_rows == 1){
        header("location: contato.php");
    }
    else{
        echo "sem cadastro";
    }
?>