<?php
      
require 'config.php';
require 'assets/dao/dao.php';

$dao = new Dao($pdo);

$id = filter_input(INPUT_GET, 'id');

$dao->excluir($id);

header('Location: index.php');
exit;


?>