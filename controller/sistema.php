<?php

switch ($_POST['acao']) {
    case 'diarios':
        echo '<script>window.location.href = "../view/diarios.html";</script>';
        break;
    case 'professores':
        echo '<script>window.location.href = "../view/professores.html";</script>';
        break;
    case 'alunos':
        echo '<script>window.location.href = "../view/alunos.html";</script>';
        break;
    case 'ponto':
        echo '<script>window.location.href = "../view/ponto.html";</script>';
        break;
    case 'addAluno':
        echo '<script>window.location.href = "../view/addAluno.html";</script>';
        break;
    case 'addProfessor':
        echo '<script>window.location.href = "../view/addProfessor.html";</script>';
        break;
    case 'informacao':
        echo '<script>window.location.href = "../view/informacao.html";</script>';
        break;
    case 'sair':
        echo '<script>window.location.href = "../view/sair.html";</script>';
        break;

    default:
        # code...
        break;
}
?>