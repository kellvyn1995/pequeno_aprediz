<?php
include_once '../controller/lista_diarios.php';
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
    
    <title>Diarios</title>
</head>
<body>
    <div class="container">
    <div class="alinhamento-bv">
        <div class="container-b">
                <div class="formulario-Header">
                    <h3 class="formulario-Header-h3" >Apontamento Diário de Alunos</h3>
                </div>
                <div class="row">
                  <form action="../controller/diarios.php" method="POST">
                  <div class="container">
                    <div class="formulario-Header-h2-animacao m-2 row row-cols-1 row-cols-sm-2 row-cols-md-6">
                      <div class="col">
                      <select class="form-select col m-2" aria-label="Default select" name="id_aluno_registro">
                          <option selected>Alunos</option>
                      <?php  
                          while ($lista_A = $lista_alunos->fetch(PDO::FETCH_ASSOC)){  
                      ?>
                          <option value="<?php echo $lista_A['id_aluno'];?>"><?php echo $lista_A['nome_aluno'];?></option>
                      <?php }?>
                      </select>
                      </div>
                      <div class="col">
                        <input class="form-control col m-2" type="text" placeholder="<?php echo $_SESSION['nome_pro'];?>" aria-label=".form-control-sm" disabled>
                        <input type="hidden" name="" value="<?php echo $_SESSION['idUser'];?>">
                      </div>
                      <div class="col">
                        <input class="form-control col m-2" type="text" name="obs_registro" placeholder="Observação" aria-label=".form-control-sm">
                      </div>
                      <div class="col">
                        <input class="form-control col m-2" type="number" name="hm_registro" placeholder="Horas ministradas" aria-label=".form-control-sm">
                      </div>
                      <div class="col">
                        <div class="col-md-2">
                          <div class="form-check col col-2">
                            <input class="form-check-input" type="radio" name="presenca_registro" id="flexRadioDefault1" value="1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Presente
                            </label>
                          </div>
                          <div class="form-check col col-2">
                            <input class="form-check-input" type="radio" name="presenca_registro" id="flexRadioDefault2" value="2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                              Ausente
                            </label>
                          </div>
                      </div>
                      </div>
                      <div class="col">
                        <div class=" col-12">
                          <button type="submit" class="btn btn-primary diarioBTN" name="acao" value="novo_registro">+</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                  <div class="container formulario-Header-h2-animacao">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col ">Nome</th>
                          <th scope="col">Presença</th>
                          <th scope="col">OBS</th>
                          <th scope="col">Hs/ministradas</th>
                          <th scope="col">Professor</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php  
                          while ($lista_reg = $lista_reg_diarios->fetch(PDO::FETCH_ASSOC)){  
                      ?>
                        <tr>
                          <th scope="row"><?php echo $lista_reg["nome_aluno"]; ?></th>
                          <td><input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioCheckedDisabled" checked disabled></td>
                          <td><input class="form-control form-control-sm " type="text" placeholder="<?php echo $lista_reg["obs_registro"]; ?>" aria-label=".form-control-sm"></td>
                          <td><input class="form-control form-control-sm " type="number" placeholder="<?php echo $lista_reg["hm_registro"]; ?>" aria-label=".form-control-sm"></td>
                          <td><label for=""><?php echo $lista_reg["nome_pro"]; ?></label></td>
                        </tr>
                      <?php }?>
                      </tbody>
                    </table>
                  </div>

                  <form action="../controller/diarios.php" method="POST">
                  <div class="p-3 formulario-Header-h2-animacao">
                  <a class="btn btn-primary btn-cd position-absolute bottom-10 start-0 m-1" href="../view/sistema.php" role="button">Inicio</a>
                        <button class="btn btn-success btn-cd" name="acao" value="fecha_diario">Fecha diario</button>
                  </div>
                  </form>

                </div>

                    

        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>