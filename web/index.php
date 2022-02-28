<?php

require_once __DIR__ . '/../lib/templateHandler.php';

$config = parse_ini_file(__DIR__ . '/../config.ini');
putenv('GUESTBOOK_DB=' . $config['GUESTBOOK_DB']);

render(__DIR__ . '/template/indexTemplate.php');
