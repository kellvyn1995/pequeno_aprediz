<?php
include_once '../model/logado.php';

$novo_aluno = new Aluno($_POST['total_h_aluno'],$_POST['valor_h_aluno']);
$novo_aluno->setNome($_POST['nome_aluno']);
$novo_aluno->setEmail($_POST['email_aluno']);
$novo_aluno->setNome_mae($_POST['mae_aluno']);
$novo_aluno->setNome_pai($_POST['pai_aluno']);
$novo_aluno->setContato_mae($_POST['contato_mae_aluno']);
$novo_aluno->setContato_pai($_POST['contato_pai_aluno']);
$novo_aluno->setEscola($_POST['escola_aluno']);
$novo_aluno->setNascimento($_POST['nascimento_aluno']);
$novo_aluno->setCarga_hora($_POST['total_h_aluno']);
$novo_aluno->setValor_hora($_POST['valor_h_aluno']);
$novo_aluno->setTurno($_POST['radios']);

$prof_no_sistema = new Professor();
$prof_no_sistema->setNome($_SESSION['nome_pro']);

$aluno_cadastrado = $prof_no_sistema->add_aluno($novo_aluno);
if ($aluno_cadastrado == true) {
    echo '<script>window.location.href = "../view/addAluno.php?alunoCadastro=1";</script>';
}else{
    echo '<script>window.location.href = "../view/addAluno.php?error=1";</script>';
}

?>