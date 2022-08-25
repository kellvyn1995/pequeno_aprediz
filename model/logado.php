<?php
require_once '../model/classePessoa.php';
require_once '../model/classeProfessor.php';
require_once '../model/classeAluno.php';
require_once '../model/conexao.php';
class logar extends Professor{
        // parte do sistema de login
        public function login($email_pro, $senha_pro){
            $pdo = conectar();// ser conectando ao banco de dados
            // sql fara uma consulta ao banco de dados, para busca o usuario
            $sql = "SELECT * FROM professores WHERE email_pro = :email_pro LIMIT 1";
            // vincula um parâmetro ao nome da variável especificada
            $sql = $pdo->prepare($sql); // preparando a instruçõa
            $sql->bindValue(":email_pro",$email_pro);
            $sql->execute();
            
            $usuario = $sql->fetch();
            // verificar ser a senha digitada é a mesma que esta salva no banco de dados
            if (password_verify($senha_pro,$usuario['senha_pro'])) {
                $_SESSION['idUser'] = $usuario['id_professor'];
                $_SESSION['nome_pro'] = $usuario['nome_pro'];
                return true;
            }else {
                echo "nenhum usuario encontrado";
            }

        }

}

function addUsuario($nome_pro,$email_pro,$senha_pro,$telefone,$semanal){
    $pdo = conectar();
    try{
    $query = $pdo->prepare("INSERT INTO professores (nome_pro,email_pro,senha_pro,telefone,semanal) VALUES (:nome_pro,:email_pro,:senha_pro,:telefone,:semanal)");
    //PDOStatement :: bindValue - Vincula um valor a um parâmetro
    $query->bindValue(":nome_pro",$nome_pro);
    $query->bindValue(":email_pro",$email_pro);
    $query->bindValue(":senha_pro",$senha_pro);
    $query->bindValue(":telefone",$telefone);
    $query->bindValue(":semanal",$semanal);
    $query->execute();
    return true;
    } catch (PDOException $e) {
            echo "Erro ao cadastrar novo usuario: ".$e->getMessage();
          return false;
        }
}
?>