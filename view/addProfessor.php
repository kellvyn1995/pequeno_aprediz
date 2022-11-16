<?php
include_once '../controller/verifica.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilo/global.css">
    <link rel="stylesheet" href="../estilo/addProfessor.css">
    <title>Cadastro de professores</title>
</head>
<body>
    <div class="alinhamento-bv">
        <div class="container-b">
            <form action="../controller/addProfessor.php" method="POST" id="form_addProfessor">
                <div class="formulario-Header">
                    <h3 class="formulario-Header-h3" >Cadastro Professor</h3>
                </div>
                <div class="row">

                      <div class="col-12 col-md-6  form_campo">
                        <input type="name" name="nome" id="nome_profeesor" class="inpu-animacao" placeholder="Nome" required>
                        <i><img class="img-success" src="../icones/success-icon.svg" alt=""></i>
                        <i><img class="img-error" src="../icones/error-icon.svg" alt=""></i>
                        <small>Error messagem</small>
                      </div>

                      <div class="col-12 col-md-6  form_campo ">
                        <input type="email" name="email" id="email_pro" class="inpu-animacao" placeholder="Email" required>
                        <i><img class="img-success" src="../icones/success-icon.svg" alt=""></i>
                        <i><img class="img-error" src="../icones/error-icon.svg" alt=""></i>
                        <small>Error messagem</small>
                      </div>

                      <div class="col-12 col-md-6  form_campo ">
                        <input type="date" name="nascimento" id="nascimento_pro" class="inpu-animacao" placeholder="Data de nascimento" required>
                        <i><img class="img-success" src="../icones/success-icon.svg" alt=""></i>
                        <i><img class="img-error" src="../icones/error-icon.svg" alt=""></i>
                        <small>Error messagem</small>
                      </div>

                      <div class="col-12 col-md-6  form_campo ">
                        <input type="tel" name="telefone" id="telefone_pro" class="inpu-animacao" placeholder="Telefone" required>
                        <i><img class="img-success" src="../icones/success-icon.svg" alt=""></i>
                        <i><img class="img-error" src="../icones/error-icon.svg" alt=""></i>
                        <small>Error messagem</small>
                      </div>

                      <div class="col-12 col-md-6  form_campo ">
                        <input type="password" name="senha" id="numeroCasa" class="inpu-animacao" placeholder="Senha" required>
                        <i><img class="img-success" src="../icones/success-icon.svg" alt=""></i>
                        <i><img class="img-error" src="../icones/error-icon.svg" alt=""></i>
                        <small>Error messagem</small>
                      </div>

                      <div class="col-12 col-md-6  form_campo ">
                        <input type="password" name="confirma_senha" id="numeroCasa" class="inpu-animacao" placeholder="Confirma senha" required>
                        <i><img class="img-success" src="../icones/success-icon.svg" alt=""></i>
                        <i><img class="img-error" src="../icones/error-icon.svg" alt=""></i>
                        <small>Error messagem</small>
                      </div>

                      <div class="formulario-Header-h2-animacao">
                        <h3 class="formulario-Header-h2" >Endereço</h3>
                      </div>

                      <div class="col-12 col-md-6  form_campo ">
                        <input type="text" name="rua" id="rua" class="inpu-animacao" placeholder="Rua" required>
                        <i><img class="img-success" src="../icones/success-icon.svg" alt=""></i>
                        <i><img class="img-error" src="../icones/error-icon.svg" alt=""></i>
                        <small>Error messagem</small>
                      </div>

                      <div class="col-12 col-md-6  form_campo ">
                        <input type="text" name="bairro" id="bairro" class="inpu-animacao" placeholder="Bairro" required>
                        <i><img class="img-success" src="../icones/success-icon.svg" alt=""></i>
                        <i><img class="img-error" src="../icones/error-icon.svg" alt=""></i>
                        <small>Error messagem</small>
                      </div>

                      <div class="col-12 col-md-6  form_campo ">
                        <input type="number" name="numero" id="numeroCasa" class="inpu-animacao" placeholder="Nº">
                        <i><img class="img-success" src="../icones/success-icon.svg" alt=""></i>
                        <i><img class="img-error" src="../icones/error-icon.svg" alt=""></i>
                        <small>Error messagem</small>
                      </div>

                      <div class="col-12 col-md-6  form_campo ">
                        <input type="text" name="estado" id="estado" class="inpu-animacao" placeholder="Estado" required>
                        <i><img class="img-success" src="../icones/success-icon.svg" alt=""></i>
                        <i><img class="img-error" src="../icones/error-icon.svg" alt=""></i>
                        <small>Error messagem</small>
                      </div>

                      <div class="col-12 col-md-6  form_campo ">
                        <input type="text" name="cep" id="cep" class="inpu-animacao" placeholder="CEP" required>
                        <i><img class="img-success" src="../icones/success-icon.svg" alt=""></i>
                        <i><img class="img-error" src="../icones/error-icon.svg" alt=""></i>
                        <small>Error messagem</small>
                      </div>

                      <div class="formulario-Header-h2-animacao">
                        <h3 class="formulario-Header-h2" >Informações Profissionais</h3>
                      </div>

                      <div class="col-12 col-md-6  form_campo ">
                        <input type="text" name="disponibilidade" id="semanal" class="inpu-animacao" placeholder="Disponibilidade na Semanal" required>
                        <i><img class="img-success" src="../icones/success-icon.svg" alt=""></i>
                        <i><img class="img-error" src="../icones/error-icon.svg" alt=""></i>
                        <small>Error messagem</small>
                      </div>

                      <div class="col-12 col-md-6  form_campo ">
                        <input type="text" name="adicional" id="adicionais" class="inpu-animacao" placeholder="Informações Adicionais" required>
                        <i><img class="img-success" src="../icones/success-icon.svg" alt=""></i>
                        <i><img class="img-error" src="../icones/error-icon.svg" alt=""></i>
                        <small>Error messagem</small>
                      </div>
                      <div>
                        <button type="submit" name="submit" class="btn btn-success btn-cd">Cadastrar</button>
                    </div>
                  </div>

            </form>
        </div>
    </div>
    <!-- <script src="../js/addProfessor.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>