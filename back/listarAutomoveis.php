<?php

    require 'conn.php';

    $loginId = $_GET['login_id'];

    $result = $conn->query("SELECT * FROM automoveis WHERE login_id = $loginId");
    $data = $result->fetchAll(PDO::FETCH_ASSOC);

    header('Access-Control-Allow-Origin: *');
    
    echo json_encode($data);
?>