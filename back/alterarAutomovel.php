<?php

    parse_str(file_get_contents("php://input"), $_PUT);
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PUT, GET, OPTION');
    header("Access-Control-Allow-Headers: *");
    header('Content-Type: application/json');

    $host = "localhost";
    $dbname = "crud_svelte_PHP";
    $username = "placydo";
    $password = "placydo";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $id = $_POST['id'];
    $modelo = $_POST['modelo'];
    $ano = $_POST['ano'];
    $cor = $_POST['cor'];
    $placa = $_POST['placa'];
    $login_id = $_POST['login_id'];

    $stmt = $conn->prepare("UPDATE automoveis SET modelo = :modelo, ano = :ano, cor = :cor, placa = :placa WHERE id = :id");
    
    $stmt->bindParam(':modelo', $modelo);
    $stmt->bindParam(':ano', $ano);
    $stmt->bindParam(':cor', $cor);
    $stmt->bindParam(':placa', $placa);
    $stmt->bindParam(':id', $id);

    $stmt->execute();
    if (!$stmt->execute()) {
        echo "Error: " . $stmt->errorInfo();
    }

    $response = array(
        'success' => true,
        'id' => $id,
        'cor' => $cor
      );
      
    echo json_encode($response);
    http_response_code(200);
    
?>