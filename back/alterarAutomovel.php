<?php 
    require('conn.php');

    $id = $_PUT['id'];
    $modelo = $_PUT['modelo'];
    $ano = $_PUT['ano'];
    $cor = $_PUT['cor'];
    $placa = $_PUT['placa'];
    $login_id = $_PUT['login_id'];
    
    $conn->query("UPDATE automoveis SET modelo = '$modelo', ano = '$ano', cor = '$cor', placa = '$placa' WHERE id = '$id' AND login_id = '$login_id'");
    
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: *");
    http_response_code(201);
    
?>