<?php
require_once '../model/conexao.php';
require_once '../model/classePessoa.php';
require_once '../model/classeProfessor.php';
//verificar ser o formulario foi enviado.
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // verifica ser os campos estão preenchidos
    // se definida/inicializada = true ou variável é considerada vazia
    if (isset($_POST['senha']) || !empty($_POST['senha']) && isset($_POST['confirma_senha']) || !empty($_POST['confirma_senha']) && isset($_POST['nome']) || !empty($_POST['nome']) && isset($_POST['email']) || !empty($_POST['email']) && isset($_POST['nascimento']) || !empty($_POST['nascimento']) && isset($_POST['telefone']) || !empty($_POST['telefone']) && isset($_POST['rua']) || !empty($_POST['rua']) && isset($_POST['bairro']) || !empty($_POST['bairro']) && isset($_POST['cep']) || !empty($_POST['cep']) && isset($_POST['estado']) || !empty($_POST['estado']) && isset($_POST['disponibilidade']) || !empty($_POST['disponibilidade']) && isset($_POST['adicional']) || !empty($_POST['adicional']) && isset($_POST['numero']) || !empty($_POST['numero'])) {
        
    //Testa as senhas
    if ($_POST['senha'] == $_POST['confirma_senha']) {
    $novo_professor = new Professor();
    $novo_professor->setNome(addslashes($_POST['nome']));
    $novo_professor->setEmail(addslashes($_POST['email']));
    $novo_professor->setNascimento(addslashes($_POST['nascimento']));
    $novo_professor->setTelefone(addslashes($_POST['telefone']));
    $novo_professor->setRua(addslashes($_POST['rua']));
    $novo_professor->setBairro(addslashes($_POST['bairro']));
    $novo_professor->setNumero(addslashes($_POST['numero']));
    $novo_professor->setCep(addslashes($_POST['cep']));
    $novo_professor->setEstado(addslashes($_POST['estado']));
    $novo_professor->setDisponibilidade(addslashes($_POST['disponibilidade']));
    $novo_professor->setAdicional(addslashes($_POST['adicional']));
    // Codificador de senha do php
    $senha_pro = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $professor_para_cadastrar = $novo_professor->cadastra_professor($novo_professor,$senha_pro);
        if ($professor_para_cadastrar) {
            echo "Novo professor cadastrado.";
        }else{
            echo "Professor não foi cadastrado";
        }
    } else {
        echo "As senhas são diferentes";
    }
    } else {
        echo "Todos os campos são obrigatorios";
    }
    
} else {
    echo "Nenhum formulario enviado";
}

?>