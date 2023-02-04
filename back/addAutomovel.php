<?php
    require('conn.php');
    
    $modelo = $_POST['modelo'];
    $ano = $_POST['ano'];
    $cor = $_POST['cor'];
    $placa = $_POST['placa'];
    $login_id = $_POST['login_id'];

    
    $conn->query("INSERT INTO automoveis (modelo, ano, cor, placa, login_id) VALUES ('$modelo', '$ano', '$cor', '$placa', '$login_id')");
    
    header('Access-Control-Allow-Origin: *');
    http_response_code(201);
?>