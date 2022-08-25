<?php
require_once '../model/conexao.php';
require_once '../model/classePessoa.php';
require_once '../model/classeProfessor.php';
//verificar ser o formulario foi enviado.
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //Testa as senhas
    if ($_POST['senha'] == $_POST['confirma_senha']) {
    $novo_professor = new Professor();
    $novo_professor->setNome($_POST['nome']);
    $novo_professor->setEmail($_POST['email']);
    $novo_professor->setNascimento($_POST['nascimento']);
    $novo_professor->setTelefone($_POST['telefone']);
    $novo_professor->setRua($_POST['rua']);
    $novo_professor->setBairro($_POST['bairro']);
    $novo_professor->setNumero($_POST['numero']);
    $novo_professor->setCep($_POST['cep']);
    $novo_professor->setEstado($_POST['estado']);
    $novo_professor->setDisponibilidade($_POST['disponibilidade']);
    $novo_professor->setAdicional($_POST['adicional']);
    // Codificador de senha do php
    $senha_pro = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $professor_para_cadastrar = $novo_professor->cadastra_professor($novo_professor,$senha_pro);
        if ($professor_para_cadastrar) {
            echo "Novo professor cadastrado.";
        }else{
            echo "Professor não foi cadastrado!";
        }
    } else {
        echo "As senhas são diferentes!";
    }
} else {
    echo "Nenhum formulario enviado!";
}





?>