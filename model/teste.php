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
            require_once '../model/classePessoa.php';
            require_once '../model/classeProfessor.php';
            require_once '../model/classeAluno.php';

            $p1= new Professor();
            $p1->setNome("kellvyn"); 
            $p1->setEmail("kellvynstar@gmail.com"); 
            $p1->setTelefone("99531128"); 
            $p1->setDisponibilidade("Tarde"); 

            $aluno = new Aluno(40,5);
            $aluno->setNome("bruna"); 


            print_r($p1);
            print_r($aluno);
        ?>
    </pre>
</body>
</html>