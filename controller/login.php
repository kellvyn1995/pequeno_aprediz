<?php
//se email e senha, for diferente de vazio o if receber os dados
if (isset($_POST['userUsuario']) && !empty($_POST['userUsuario']) && isset($_POST['senhaUsuario']) && !empty($_POST['senhaUsuario'])) {

  include_once "../model/conexao.php";
  include_once "../model/logado.php";

  $u = new Logar();

  $email = addslashes($_POST['userUsuario']);
  $senha = addslashes($_POST['senhaUsuario']);

  // se a condição for verdadeira o usuario vai para tela do sistema se não volta pra tela de login
  if ($u->login($email, $senha) == true) {
    echo "<script>top.window.location='../view/sistema.php';</script>";
  }else {
    // usuario e senha incoretos
    echo "<script>top.window.location='../view/login.HTML?pg=1';</script>";
    // echo 'usuario não emcontrado';
  }
}else {
  // ser os dados não forem informados, será redirecionado para pagina de login
  echo "<script>top.window.location='../view/login.HTML?erro=2';</script>";
  // echo 'email ou senha vaziu';
}
 ?>