<?php
$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$sobrenome = filter_input(INPUT_POST, 'sobrenome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$cep = filter_input(INPUT_POST, 'cep');


//echo 'Id: '.$id.' | Nome: '.$nome.' | sobrenome: '.$sobrenome.' | email: '.$email.' | cep: '.$cep;

if($nome && $sobrenome && $email && $cep){
      
    require 'config.php';
    require 'assets/dao/dao.php';

    $dao = new Dao($pdo);
    $ark = new Arkadiano();
    
    $ark->setId($id);
    $ark->setNome($nome);
    $ark->setSobrenome($sobrenome);
    $ark->setEmail($email);
    $ark->setCep($cep);
    
    $dao->atualizar($ark);

header('Location: index.php');
exit;

} else{
    
}
?>