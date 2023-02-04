<?php 
    require('conn.php');
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $conn->query("INSERT INTO login (nome, email, senha) VALUES ('$nome', '$email', '$senha')");
    
    header('Access-Control-Allow-Origin: *');
    http_response_code(201);

?>