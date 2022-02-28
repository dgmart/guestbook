<?php

require_once '../../src/controller/saveVisitorController.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // normalization do POST
    $strJson = file_get_contents('php://input');
    $json = json_decode($strJson);
    $visitor = [
        'email' => $json->email ?? null ,
        'name' => $json->name ?? null,
    ];
    $saved = saveVisitor($visitor);
    if ($saved) {
        echo 'visitante salvo';
    } else {
        echo 'erro ao gravar visitante';
    }
}
