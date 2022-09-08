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
    <link rel="stylesheet" type="text/css" href="../estilo/global.css">
    <link rel="stylesheet" type="text/css" href="../estilo/formulario.css">
    
    <title>Cadastrar Aluno</title>
</head>
<body>
    <div class="alinhamento-bv">
        <div class="container-b">
            <form action="../controller/addAluno.php" method="POST" id="form_addAluno">
                <div class="formulario-Header">
                    <h3 class="formulario-Header-h3" >Cadastror de Aluno</h3>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6  form_campo">
                      <input type="name" name="nome_aluno" id="nome_aluno" class="inpu-animacao" placeholder="Nome Aluno" value="">
                      <i><img class="img-success" src="../icones/success-icon.svg" alt=""></i>
                      <i><img class="img-error" src="../icones/error-icon.svg" alt=""></i>
                      <small>Error messagem</small>
                    </div>

                    <div class="col-12 col-md-6  form_campo ">
                      <input type="text" name="email_aluno" id="email_aluno" class="inpu-animacao" placeholder="Email do Aluno" value="">
                      <i><img class="img-success" src="../icones/success-icon.svg" alt=""></i>
                      <i><img class="img-error" src="../icones/error-icon.svg" alt=""></i>
                      <small>Error messagem</small>
                    </div>

                    <div class="col-12 col-md-6  form_campo ">
                        <input type="text" name="mae_aluno" id="mae_aluno" class="inpu-animacao" placeholder="Nome da Mãe" value="">
                        <i><img class="img-success" src="../icones/success-icon.svg" alt=""></i>
                        <i><img class="img-error" src="../icones/error-icon.svg" alt=""></i>
                        <small>Error messagem</small>
                    </div>
                      
                    <div class="col-12 col-md-6  form_campo ">
                        <input type="text" name="pai_aluno" class="inpu-animacao" placeholder="Nome do Pai" value="">
                        <i><img class="img-success" src="../icones/success-icon.svg" alt=""></i>
                        <i><img class="img-error" src="../icones/error-icon.svg" alt=""></i>
                        <small>Error messagem</small>
                    </div>

                    <div class="col-12 col-md-6  form_campo ">
                        <input type="text" name="contato_mae_aluno" id="contato_mae_aluno" class="inpu-animacao" placeholder="Contato da Mãe" value="">
                        <i><img class="img-success" src="../icones/success-icon.svg" alt=""></i>
                        <i><img class="img-error" src="../icones/error-icon.svg" alt=""></i>
                        <small>Error messagem</small>
                    </div>

                    <div class="col-12 col-md-6  form_campo ">
                        <input type="text" name="contato_pai_aluno"  class="inpu-animacao" placeholder="Contato do Pai" value="">
                        <i><img class="img-success" src="../icones/success-icon.svg" alt=""></i>
                        <i><img class="img-error" src="../icones/error-icon.svg" alt=""></i>
                        <small>Error messagem</small>
                    </div>

                    <div class="col-12 col-md-6  form_campo ">
                        <input type="text" name="escola_aluno" id="escola_aluno" class="inpu-animacao" placeholder="Escola onde estuda" value="">
                        <i><img class="img-success" src="../icones/success-icon.svg" alt=""></i>
                        <i><img class="img-error" src="../icones/error-icon.svg" alt=""></i>
                        <small>Error messagem</small>
                    </div>
                      
                    <div class="col-12 col-md-6  form_campo ">
                        <input type="date" name="nascimento_aluno" id="nacimento_aluno" class="inpu-animacao" placeholder="Data de nacimento" value="">
                        <i><img class="img-success" src="../icones/success-icon.svg" alt=""></i>
                        <i><img class="img-error" src="../icones/error-icon.svg" alt=""></i>
                        <small>Error messagem</small>
                    </div>

                    <div class="col-12 col-md-6  form_campo ">
                        <input type="number" name="total_h_aluno" id="total_h_aluno" class="inpu-animacao" placeholder="Carga horária" value="">
                        <i><img class="img-success" src="../icones/success-icon.svg" alt=""></i>
                        <i><img class="img-error" src="../icones/error-icon.svg" alt=""></i>
                        <small>Error messagem</small>
                    </div>

                    <div class="col-12 col-md-6  form_campo">
                        <input type="number" step="0.01" min="0" name="valor_h_aluno" id="valor_h_aluno" class="inpu-animacao" placeholder="Valor hora" value="">
                        <i><img class="img-success" src="../icones/success-icon.svg" alt=""></i>
                        <i><img class="img-error" src="../icones/error-icon.svg" alt=""></i>
                        <small>Error messagem</small>
                    </div>

                      <div class="col-12 col-md-6 ">
                        <label class="formulario-Header-h2-animacao formulario-Header-h2" for="">ESCOLHA O TURNO</label>
                        <div class="inpu-animacao">
                          <div class="inputR1">
                            <input class="form-check-input" type="radio" name="radios" id="Radios1" value="1" checked>
                            <label for="Radios1">turno da manhã</label>
                          </div>
                          
                          <div class="inputR2">
                            <input class="form-check-input" type="radio" name="radios" id="Radios2" value="2">
                            <label for="Radios2">Turno da tarde</label>
                          </div>
                        </div>

                      </div>
                      <div>
                        <button type="submit" class="btn btn-success btn-cd">Cadastrar</button>
                    </div>
                  </div>

            </form>
        </div>
    </div>
    <script src="../js/addAluno.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>