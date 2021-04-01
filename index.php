<?php

require 'config.php';
require 'assets/dao/dao.php';

$usuarioDao = new Dao($pdo);

$lista = $usuarioDao->exibirTodos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
  <title>CRUD</title>
</head>
<body>
  <div class="container">
    <nav class="navbar bg-dark">
      <li><a class="btn btn-success" href="adicionar.php" style="background-image: linear-gradient(to top right, rgb(110, 14, 235), rgb(128, 4, 76));">Adicionar</a></li>  
    </nav>
    <br>
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>E_mail</th>
        <th>CEP</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($lista as $usuario): ?>
        <tr>
          <td class="align-middle"><?= $usuario->getId();?></td>
          <td class="align-middle"><?= $usuario->getNome();?></td>
          <td class="align-middle"><?= $usuario->getSobrenome();?></td>
          <td class="align-middle"><?= $usuario->getEmail();?></td>
          <td class="align-middle"><?= $usuario->getCep();?></td>

          <td><a style="background-image: linear-gradient(to top right, rgb(4, 8, 231), rgb(9, 194, 226), rgb(9, 194, 226), rgb(4, 8, 231));"
                 class="btn btn-primary" href="editar.php?id=<?= $usuario->getId();?>">Editar</a></td>
          <td><a class="btn btn-danger" href="excluir.php?id=<?= $usuario->getId();?>">Excluir</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  </div>
</body>
</html>