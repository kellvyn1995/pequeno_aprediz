<?php
include_once "../model/conexao.php";
include_once "../model/logado.php";
$nome_pro = $_POST['nome'];
$email_pro = $_POST['email'];
$telefone = $_POST['telefone'];
$semanal = $_POST['semana'];


$senha_pro = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$novoU = addUsuario($nome_pro,$email_pro,$senha_pro,$telefone,$semanal);
if($novoU){
    echo "Novo usuario cadastrado";
}else{
    echo "Erro ao cadastra novo usuario";
}
?>