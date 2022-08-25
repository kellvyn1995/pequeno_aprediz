<?php
include_once '../model/logado.php';
$prof_no_sistema = new Professor();
$prof_no_sistema->setNome($_SESSION['nome_pro']);
$resultado = $prof_no_sistema->lista_professores();
?>