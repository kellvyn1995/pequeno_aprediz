<?php 
include_once '../model/logado.php';
$prof_no_sistema = new Professor();
$prof_no_sistema->setNome($_SESSION['nome_pro']);
$lista_prof = $prof_no_sistema->lista_professores();
$lista_reg_diarios = $prof_no_sistema->lista_diario_registro();
$lista_alunos = $prof_no_sistema->lista_alunos();

// converte data do diário
$data_diario = $prof_no_sistema->data_diario_aberto();
$data_diario = $data_diario->fetch(PDO::FETCH_ASSOC);
$timestamp = strtotime($data_diario['data_diario']); 
$novaData = date("d-m-Y", $timestamp );


?>