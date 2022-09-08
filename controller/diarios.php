<?php
include_once '../model/logado.php';

switch ($_POST['acao']) {
    case 'abrir_diario':
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $prof_no_sistema = new Professor();
            $prof_no_sistema->setNome($_SESSION['nome_pro']);

            $abri_diario = $prof_no_sistema->abrir_diario(addslashes($_POST['data_diario']));
            echo '<script>window.location.href = "../view/diarios.php";</script>';
        } else {
            echo "Nenhum formulario enviado";
        }
        break;
    case 'novo_registro':
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['id_aluno_registro']) || !empty($_POST['id_aluno_registro']) && isset($_POST['presenca_registro']) || !empty($_POST['presenca_registro']) && isset($_POST['obs_registro']) || !empty($_POST['obs_registro']) && isset($_POST['hm_registro']) || !empty($_POST['hm_registro']) ) {
                
            $id_aluno_registro = addslashes($_POST['id_aluno_registro']);
            $presenca_registro = addslashes($_POST['presenca_registro']);
            $obs_registro = addslashes($_POST['obs_registro']);
            $hm_registro = addslashes($_POST['hm_registro']);

        
            $prof_no_sistema = new Professor();
            $prof_no_sistema->setNome($_SESSION['nome_pro']);
        
            $registro = $prof_no_sistema->add_registro_diario($id_aluno_registro,$presenca_registro,$obs_registro,$hm_registro);
                
            if ($registro) {
                echo '<script>window.location.href = "../view/diarios.php";</script>';
            } else {
                echo "Error ao adicionar novo registro";
            }
            } else {
                echo "Todos os campos são obrigatorios";
            }
        } else {
            echo "Nenhum formulario enviado";
        }
        break;

    case 'fecha_diario':
        $prof_no_sistema = new Professor();
        $prof_no_sistema->setNome($_SESSION['nome_pro']);
        $fechaDiario = $prof_no_sistema->fechar_diario();
        if ($fechaDiario) {
            echo '<script>window.location.href = "../view/sistema.php";</script>';
        } else {
            echo "Error ao fecha diario";
        }
        break;


    
    default:
        # code...
        break;
}




?>