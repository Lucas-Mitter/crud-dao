<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="assets/css/estiloAdicionar.css">

  <title>Registro</title>
</head>

<body>
<div class="container-fluid">
  <div class="row">
    <div class="col-3">
      <div class="textoEsquerda">
        <p style="font-size:50px;">Arkádia</p>
        <br/><br/>
        <p style="font-size:35px;">Bem vindo!</p>
        <br/>
        <p>Você está a 1 passo de conhecer um admirável mundo novo, cadastre-se.</p>
      </div>
    </div>
    <div class="col-9">
      <div class="teste">        
        <form method="POST" action="adicionarAction.php">
          <div class="textoFormularioInterno">
            <p>Registre-se em Arkádia</p>
          </div>
            <input type="text" name="nome" class="form-group" placeholder="Nome">
            <input type="text" name="sobrenome" class="form-group" placeholder="Sobrenome">
            <input type="email" name="email" class="form-group" placeholder="Email">
            <input type="text" name="cep" class="form-group" placeholder="CEP">
            <div class="botaoFormularioInterno">
            <input type="submit" class="form-group btn btn-primary" value="Cadastrar">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>

</html>