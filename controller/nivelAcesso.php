<?php
require_once '../model/conexao.php';
require_once '../model/classePessoa.php';
require_once '../model/classeProfessor.php';
//verificar ser o formulario foi enviado.
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    
    $atualizar = new Professor();
    $id = addslashes($_POST['id_professor']);
    $diarios = addslashes($_POST['diarios'.$id]);
    $professor = addslashes($_POST['professor'.$id]);
    $alunos = addslashes($_POST['alunos'.$id]);
    $ponto = addslashes($_POST['ponto'.$id]);
    $cad_alunos = addslashes($_POST['cad_alunos'.$id]);
    $cad_pro = addslashes($_POST['cad_pro'.$id]);
    $informa = addslashes($_POST['informa'.$id]);

    echo 'ID: '.$id ,' DIASRIOS: '.$diarios, 'professor: '.$professor;
    $atualizar_acesso = $atualizar->atualizar_acesso($diarios, $professor, $alunos, $ponto, $cad_alunos ,$cad_pro ,$informa ,$id);

   if ($atualizar_acesso) {
    echo "<script>top.window.location='../view/aviso.php?aviso=2';</script>";
    } else {
        echo "<script>top.window.location='../view/aviso.php?aviso=error';</script>";
    }
    

}
?>