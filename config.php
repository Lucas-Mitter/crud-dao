<?php

$dbName = 'teste';
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';

$pdo = new pdo('mysql:dbname='.$dbName.';host='.$dbHost,$dbUser,$dbPass);

?>