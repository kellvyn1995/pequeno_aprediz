<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste ob</title>
</head>
<body>
    <pre>
        <?php
            session_start();
            // require_once '../model/classePessoa.php';
            // require_once '../model/classeProfessor.php';
            // require_once '../model/classeAluno.php';
            require_once '../model/conexao.php';
            require_once '../model/logado.php';
            $logar = new logar();
            $email_pro = addslashes('kelvynstar@gmail.com');
            $senha_pro = addslashes(00700722);

            //$logar->login($email_pro,$senha_pro);
            if ($logar->login($email_pro, $senha_pro) == true) {
                echo 'Usuario encontrado logado <br>';
                // echo ''.$_SESSION['nome'].'';
            }else {
                echo 'erro na tentativa de login';
            }
            
            

        
            
            

            // function lista(){
            //     $pdo = conectar();
            //     $array = array();
            //     $sql = "SELECT * FROM professores WHERE id_professor = 1";
            //     $sql = $pdo->prepare($sql);
            //     $sql->execute();
            //     if ($sql->rowCount() > 0) {
            //         $array = $sql->fetch();
            //     }
            //     return $array;
            // }
            // $teste = lista();
            // print_r($teste);

            // $p1= new Professor();
            // $p1->setNome($teste['nome_pro']); 
            // $p1->setEmail($teste['email_pro']); 
            // $p1->setTelefone($teste['telefone']); 
            // $p1->setDisponibilidade("Tarde"); 

            // $aluno = new Aluno(40,5);
            // $aluno->setNome("bruna"); 


            // print_r($p1);
            // print_r($aluno);


        ?>
    </pre>
</body>
</html>