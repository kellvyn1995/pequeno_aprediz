<?php

switch ($_POST['acao']) {
    case 'diarios':
        echo '<script>window.location.href = "../controller/verifica_diario.php";</script>';
        break;
    case 'professores':
        echo '<script>window.location.href = "../view/professores.php?pagina=professor";</script>';
        break;
    case 'alunos':
        echo '<script>window.location.href = "../view/alunos.php?pagina=alunos";</script>';
        break;
    case 'ponto':
        echo '<script>window.location.href = "../view/ponto.html?pagina=ponto";</script>';
        break;
    case 'addAluno':
        echo '<script>window.location.href = "../view/addAluno.php?pagina=cad_alunos";</script>';
        break;
    case 'addProfessor':
        echo '<script>window.location.href = "../view/addProfessor.php?pagina=cad_pro";</script>';
        break;
    case 'informacao':
        echo '<script>window.location.href = "../view/informa.php?pagina=informa";</script>';
        break;
    case 'sair':
        echo '<script>window.location.href = "../controller/logout.php";</script>';
        break;

    default:
        # code...
        break;
}
?>