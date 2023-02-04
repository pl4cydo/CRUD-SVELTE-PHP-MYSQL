<?php 
    header('Access-Control-Allow-Origin: *');
    require('conn.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT id, nome FROM login WHERE nome = '$username' AND senha = '$password'");
    $data = $result->fetchAll(PDO::FETCH_ASSOC);

    if (sizeof($data) == 0) {
        http_response_code(403);
        exit();
    }
    
    echo json_encode($data[0]);
?>