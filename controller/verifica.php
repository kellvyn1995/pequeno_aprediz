<?php
include_once '../model/logado.php';
if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])){
    $pagina = addslashes($_GET['pagina']);
    switch ($pagina) {
        case 'diarios':
            $tela = 'diarios';
            $prof_no_sistema = new Professor();
            $rtd = $prof_no_sistema->nivel_acesso($tela,$_SESSION['idUser']);
            if ($rtd) {
        
            }else{
                echo '<script>window.location.href = "../view/aviso.php?aviso=5";</script>';
            }
            break;
        case 'professor':
            $tela = 'professor';
            $prof_no_sistema = new Professor();
            $rtd = $prof_no_sistema->nivel_acesso($tela,$_SESSION['idUser']);
            if ($rtd) {
        
            }else{
                echo '<script>window.location.href = "../view/aviso.php?aviso=5";</script>';
            }
            break;
        case 'alunos':
            $tela = 'alunos';
            $prof_no_sistema = new Professor();
            $rtd = $prof_no_sistema->nivel_acesso($tela,$_SESSION['idUser']);
            if ($rtd) {
        
            }else{
                echo '<script>window.location.href = "../view/aviso.php?aviso=5";</script>';
            }
            break;
        case 'ponto':
            $tela = 'ponto';
            $prof_no_sistema = new Professor();
            $rtd = $prof_no_sistema->nivel_acesso($tela,$_SESSION['idUser']);
            if ($rtd) {
        
            }else{
                echo '<script>window.location.href = "../view/aviso.php?aviso=5";</script>';
            }
            break;
        case 'cad_alunos':
            $tela = 'cad_alunos';
            $prof_no_sistema = new Professor();
            $rtd = $prof_no_sistema->nivel_acesso($tela,$_SESSION['idUser']);
            if ($rtd) {
        
            }else{
                echo '<script>window.location.href = "../view/aviso.php?aviso=5";</script>';
            }
            break;
        case 'cad_pro':
            $tela = 'cad_pro';
            $prof_no_sistema = new Professor();
            $rtd = $prof_no_sistema->nivel_acesso($tela,$_SESSION['idUser']);
            if ($rtd) {
        
            }else{
                echo '<script>window.location.href = "../view/aviso.php?aviso=5";</script>';
            }
            break;
        case 'informa':
            $tela = 'informa';
            $prof_no_sistema = new Professor();
            $rtd = $prof_no_sistema->nivel_acesso($tela,$_SESSION['idUser']);
            if ($rtd) {
        
            }else{
                echo '<script>window.location.href = "../view/aviso.php?aviso=5";</script>';
            }
            break;
        case 'sistema':

            break;
        default:
            // echo '<script>window.location.href = "../view/aviso.php?aviso=5";</script>';
            break;
    }

}else{
    echo '<script>window.location.href = "../view/login.html";</script>';
}
?>