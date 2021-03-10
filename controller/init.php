<?php

//=== Credencias de acesso ao banco
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'zoom');

function db_connect(){
    $PDO = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
    return $PDO;
}

//=== Habilita as exibições de erros
ini_set('display_errors', true);
error_reporting(E_ALL);