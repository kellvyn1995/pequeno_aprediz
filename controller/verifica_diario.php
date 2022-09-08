<?php
include_once '../model/logado.php';

    $prof_no_sistema = new Professor();
    $prof_no_sistema->setNome($_SESSION['nome_pro']);

    $diario_aberto = $prof_no_sistema->verifica_diario();

    if ($diario_aberto == 1) {
        echo '<script>window.location.href = "../view/diarios.php";</script>';
    } else {
        echo '<script>window.location.href = "../view/aberturaDiario.html";</script>';
    }
    
?>