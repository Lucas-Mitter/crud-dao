<?php

require 'config.php';
require 'assets/dao/dao.php';

$id = filter_input(INPUT_GET, 'id');

$dao = new Dao($pdo);
$ark = $dao->exibirPorId($id);

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
  <link rel="stylesheet" href="assets/css/estiloEditar.css">

  <title>Registro</title>
</head>

<body>
  <div class="container-fluid">
    <div class="teste">        
      <form method="POST" action="editarAction.php">
        <div class="textoFormularioInterno">
          <p>Editar Registro</p>
        </div>
          <input type="hidden" name="id" value="<?=$ark->getId();?>">
          <input type="text" name="nome" class="form-group" placeholder="Nome" value="<?= $ark->getNome();?>">
          <input type="text" name="sobrenome" class="form-group" placeholder="Sobrenome" value="<?= $ark->getSobrenome();?>">
          <input type="email" name="email" class="form-group" placeholder="Email" value="<?= $ark->getEmail();?>">
          <input type="text" name="cep" class="form-group" placeholder="CEP" value="<?= $ark->getCep();?>">
          <div class="botaoFormularioInterno">
          <input type="submit" class="form-group btn btn-primary" value="Cadastrar">
      </form>
    </div>
  </div>
</body>

</html>