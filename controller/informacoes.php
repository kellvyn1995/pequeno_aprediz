<?php
include_once '../model/logado.php';
$prof_no_sistema = new Professor();
$prof_no_sistema->setNome($_SESSION['nome_pro']);
$lista_prof = $prof_no_sistema->lista_professores();
$lista_alunos = $prof_no_sistema->lista_alunos();

if (isset($_GET['altera'])){
    $id_do_aluno = addslashes($_GET['idAluno']);
    $situacao = addslashes($_GET['nova_situacao']);
    $mes = addslashes($_GET['mes']);
    $ano = addslashes($_GET['ano']);
    $filtro = addslashes($_GET['filtro']);
    $prof_no_sistema->salva_mensalidade($id_do_aluno,$situacao,$mes,$ano);
    // echo "<script>top.window.location='../view/informa.php';</script>";
}else {
    //primeira verificação
    $mes = date('m');
    $ano = date('Y');
    $filtro = 0;
    $retorno = $prof_no_sistema->mensalidade($mes,$ano);
    
}
if (isset($_POST['acao']) or isset($_GET['acao'])) {
    switch ($_POST['acao'] or $_GET['acao']) {
        case 'busca':
            $mes = addslashes($_POST['mes']);
            $ano = addslashes($_POST['ano']);
            $filtro = addslashes($_POST['filtro']);
            $retorno = $prof_no_sistema->mensalidade($mes,$ano);
            break;
        case 'salva':
            // $id_do_aluno = addslashes($_GET['idAluno']);
            // $situacao = addslashes($_GET['nova_situacao']);
            // $mes = addslashes($_GET['mes']);
            // $ano = addslashes($_GET['ano']);
            // $filtro = addslashes($_GET['filtro']);
            // $prof_no_sistema->salva_mensalidade($id_do_aluno,$situacao,$mes,$ano);
            // // echo "<script>top.window.location='../view/informa.php';</script>";
            break;
        default:

            break;
    }
}

?>