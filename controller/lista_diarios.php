<?php 
include_once '../model/logado.php';
$prof_no_sistema = new Professor();
$prof_no_sistema->setNome($_SESSION['nome_pro']);
$lista_prof = $prof_no_sistema->lista_professores();
$lista_reg_diarios = $prof_no_sistema->lista_diario_registro();
$lista_alunos = $prof_no_sistema->lista_alunos();
?>