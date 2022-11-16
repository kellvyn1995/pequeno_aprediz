<?php
include_once '../controller/professores.php';
include_once '../controller/verifica.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../estilo/global.css">
    <link rel="stylesheet" type="text/css" href="../estilo/formulario.css">
    <link rel="stylesheet" type="text/css" href="../estilo/diario.css">
    <link rel="stylesheet" type="text/css" href="../estilo/addProfessor.css">
    <title>Professores</title>
</head>
<body>
    <div class="container">
    <div class="alinhamento-bv">
        <div class="container-b">
                <div class="formulario-Header">
                    <h3 class="formulario-Header-h3" >Professores</h3>
                </div>
                <div class="row">
                    <div class="container p-3">
                            <table class="table formulario-Header-h2-animacao">
                                <thead>
                                  <tr>
                                    <th scope="col ">Nome</th>
                                    <th scope="col">telefone</th>
                                    <th scope="col">Semanal</th>
                                    <th scope="col">Adicionais</th>
                                    <th scope="col">Opções</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php 
                                
                                while ($lista = $resultado->fetch(PDO::FETCH_ASSOC)){  
                                
                                ?>
                                  <tr>
                                    <th scope="row"><?php echo $lista["nome_pro"]; ?></th>
                                    <input type="hidden" name="id_aluno" value="<?php echo $lista["id_professor"]; ?>">
                                    <td><div class="position-relative"><?php echo $lista["telefone"]; ?></div></td>
                                    <td><div class="position-relative"><?php echo $lista["semanal"]; ?><div></td>
                                    <td><div class="position-relative"><?php echo $lista["adicionais"]; ?><div></div></td>
                                    <td><div class="position-relative"> <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight<?php echo $lista['id_professor'];?>" aria-controls="offcanvasRight"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0  ">
                                        <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                        <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                                      </svg></button> <div></div></td>
                                  </tr>
                                   <!-- O botão chama uma tela lateral -->
                                   <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight<?php echo $lista["id_professor"]; ?>" aria-labelledby="offcanvasRightLabel">
                                    <div class="offcanvas-header">
                                        <h5 id="offcanvasRightLabel">Nível de acesso de <?php echo $lista['nome_pro'];?></h5>
                                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <form action="../controller/nivelAcesso.php" method="POST">
                                        <input type="hidden" id="id_professor" name="id_professor" value="<?php echo $lista["id_professor"]; ?>">
                                        <!-- darios -->
                                        <label for="" class="form-label">Diarios</label>
                                        <select name="diarios<?php echo $lista["id_professor"]; ?>" id="inputState" class="form-control">
                                            <?php $dest = $lista["diarios"];?>
                                            <?php switch($dest) : case 1 : ?>
                                                <option selected>Acesso concedido</option>
                                                <option value="0">Acesso Negado</option> 
                                            <?php break; case 0 : ?>
                                                <option selected>Acesso Negado</option>
                                                <option value="1">Acesso concedido</option>
                                            <?php break; default : ?>
                                                <option selected>Acesso</option>
                                                <option value="1">Acesso concedido</option>
                                                <option value="0">Acesso Negado</option> 
                                            <?php endswitch; ?>
                                            </select>
                                        <hr>
                                        <!-- professor -->
                                        <label for="" class="form-label">Professores</label>
                                        <select name="professor<?php echo $lista["id_professor"]; ?>" id="inputState" class="form-control">
                                            <?php $dest = $lista["professor"];?>
                                            <?php switch($dest) : case 1 : ?>
                                                <option selected>Acesso concedido</option>
                                                <option value="0">Acesso Negado</option> 
                                            <?php break; case 0 : ?>
                                                <option selected>Acesso Negado</option>
                                                <option value="1">Acesso concedido</option>
                                            <?php break; default : ?>
                                                <option selected>Acesso</option>
                                                <option value="1">Acesso concedido</option>
                                                <option value="0">Acesso Negado</option> 
                                            <?php endswitch; ?>
                                            </select>
                                        <hr>
                                        <!-- Alunos -->
                                        <label for="" class="form-label">Alunos</label>
                                        <select name="alunos<?php echo $lista["id_professor"]; ?>" id="inputState" class="form-control">
                                            <?php $dest = $lista["alunos"];?>
                                            <?php switch($dest) : case 1 : ?>
                                                <option selected>Acesso concedido</option>
                                                <option value="0">Acesso Negado</option> 
                                            <?php break; case 0 : ?>
                                                <option selected>Acesso Negado</option>
                                                <option value="1">Acesso concedido</option>
                                            <?php break; default : ?>
                                                <option selected>Acesso</option>
                                                <option value="1">Acesso concedido</option>
                                                <option value="0">Acesso Negado</option> 
                                            <?php endswitch; ?>
                                            </select>
                                        <hr>
                                        <!-- Ponto -->
                                        <label for="" class="form-label">Ponto</label>
                                        <select name="ponto<?php echo $lista["id_professor"]; ?>" id="inputState" class="form-control">
                                            <?php $dest = $lista["ponto"];?>
                                            <?php switch($dest) : case 1 : ?>
                                                <option selected>Acesso concedido</option>
                                                <option value="0">Acesso Negado</option> 
                                            <?php break; case 0 : ?>
                                                <option selected>Acesso Negado</option>
                                                <option value="1">Acesso concedido</option>
                                            <?php break; default : ?>
                                                <option selected>Acesso</option>
                                                <option value="1">Acesso concedido</option>
                                                <option value="0">Acesso Negado</option> 
                                            <?php endswitch; ?>
                                            </select>
                                        <hr>
                                        <!-- Cadastro de aluno -->
                                        <label for="" class="form-label">Cadrastro de Alunos</label>
                                        <select name="cad_alunos<?php echo $lista["id_professor"]; ?>" id="inputState" class="form-control">
                                            <?php $dest = $lista["cad_alunos"];?>
                                            <?php switch($dest) : case 1 : ?>
                                                <option selected>Acesso concedido</option>
                                                <option value="0">Acesso Negado</option> 
                                            <?php break; case 0 : ?>
                                                <option selected>Acesso Negado</option>
                                                <option value="1">Acesso concedido</option>
                                            <?php break; default : ?>
                                                <option selected>Acesso</option>
                                                <option value="1">Acesso concedido</option>
                                                <option value="0">Acesso Negado</option> 
                                            <?php endswitch; ?>
                                            </select>
                                        <hr>
                                        <!-- Cadastrar de Professor -->
                                        <label for="" class="form-label">Cadrastro de Professores</label>
                                        <select name="cad_pro<?php echo $lista["id_professor"]; ?>" id="inputState" class="form-control">
                                            <?php $dest = $lista["cad_pro"];?>
                                            <?php switch($dest) : case 1 : ?>
                                                <option selected>Acesso concedido</option>
                                                <option value="0">Acesso Negado</option> 
                                            <?php break; case 0 : ?>
                                                <option selected>Acesso Negado</option>
                                                <option value="1">Acesso concedido</option>
                                            <?php break; default : ?>
                                                <option selected>Acesso</option>
                                                <option value="1">Acesso concedido</option>
                                                <option value="0">Acesso Negado</option> 
                                            <?php endswitch; ?>
                                            </select>
                                        <hr>
                                        <!-- Informaçães -->
                                        <label for="" class="form-label">Informações</label>
                                        <select name="informa<?php echo $lista["id_professor"]; ?>" id="inputState" class="form-control">
                                            <?php $dest = $lista["cad_pro"];?>
                                            <?php switch($dest) : case 1 : ?>
                                                <option selected>Acesso concedido</option>
                                                <option value="0">Acesso Negado</option> 
                                            <?php break; case 0 : ?>
                                                <option selected>Acesso Negado</option>
                                                <option value="1">Acesso concedido</option>
                                            <?php break; default : ?>
                                                <option selected>Acesso</option>
                                                <option value="1">Acesso concedido</option>
                                                <option value="0">Acesso Negado</option> 
                                            <?php endswitch; ?>
                                            </select>
                                        <hr>

                                        <div class="p-3 formulario-Header-h2-animacao">
                                            <button type="submit" class="btn btn-success btn-cd">Salvar</button>
                                        </div>

                                        </form>
                                        
                                    </div>
                                    </div>
                                <?php } ?>
                                </tbody>
                              </table>
                    </div>
                </div>

                    
            
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>