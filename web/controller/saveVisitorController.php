<?php

require_once __DIR__ . '/../../src/controller/saveVisitorController.php';

$config = parse_ini_file(__DIR__ . '/../../config.ini');
putenv('GUESTBOOK_DB=' . $config['GUESTBOOK_DB']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // normalization do POST
    $visitor = [
        'email' => $_POST['visitorEmail'] ?? null, // coalesce
        'name' => $_POST['visitorName'] ?? null,
    ];
    try {
        saveVisitor($visitor);
        echo 'visitor gravado com sucesso';
    } catch (\Exception $exception) {
        header('Content-Type: text/html; charset=utf8', true, 400);
        echo $exception->getMessage() . '<a href="' . $_SERVER['HTTP_REFERER'] . '">Voltar</a>';
    }
}
