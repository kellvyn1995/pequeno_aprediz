<?php
include_once '../controller/informacoes.php';
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
    
    <title>Informações</title>
</head>
<body>
<div class="container">
    <div class="alinhamento-bv">
        <div class="container-b">
                <div class="formulario-Header">
                    <h3 class="formulario-Header-h3" >Informções</h3>
                </div>
            <div class="row">
            <form action="#" method="POST" enctype="multipart/form-data">
            <div class="container text-center formulario-Header-h2-animacao">
                <div class="row m-3">
                    <div class="col">
                    <select name="mes" class="form-select" aria-label="Default select example">
                        <?php
                            switch ($mes) {
                                case '1':
                                    echo '<option selected value="1">Janeiro</option>';
                                    break;
                                case '2':
                                    echo '<option selected value="2">Fevereiro</option>';
                                    break;
                                case '3':
                                    echo '<option selected value="3">Março</option>';
                                    break;
                                case '4':
                                    echo '<option selected value="4">Abril</option>';
                                    break;
                                case '5':
                                    echo '<option selected value="5">Maio</option>';
                                    break;
                                case '6':
                                    echo '<option selected  value="6">Junho</option>';
                                    break;
                                case '7':
                                    echo '<option selected  value="7">Julho</option>';
                                    break;
                                case '8':
                                    echo '<option selected  value="8">Agosto</option>';
                                    break;
                                case '9':
                                    echo '<option selected value="9">Setembro</option>';
                                    break;
                                case '10':
                                    echo '<option selected  value="10">Outubro</option>';
                                    break;

                                case '11':
                                    echo '<option selected  value="11">Novembro</option>';
                                    break;
                                case '12':
                                    echo '<option selected  value="12">Dezembro</option>';
                                    break;
                                
                                default:
                                    # code...
                                    break;
                            }
                        ?>
                        <option value="1">Janeiro</option>
                        <option value="2">Fevereiro</option>
                        <option value="3">Março</option>
                        <option value="4">Abril</option>
                        <option value="5">Maio</option>
                        <option value="6">Junho</option>
                        <option value="7">Julho</option>
                        <option value="8">Agosto</option>
                        <option value="9">Setembro</option>
                        <option value="10">Outubro</option>
                        <option value="11">Novembro</option>
                        <option value="12">Dezembro</option>
                    </select>
                    </div>
                    <div class="col-6">
                    <select name="ano" class="form-select" aria-label="Default select example">
                    <?php
                        switch ($ano) {
                            case '2022':
                                echo '<option selected  value="2022">2022</option>';
                                break;
                            case '2023':
                                echo '<option selected value="2023">2023</option>';
                                break;
                            case '2024':
                                echo '<option selected value="2024">2024</option>';
                                break;
                            case '2025':
                                echo '<option selected  value="2025">2025</option>';
                                break;
                            default:
                                # code...
                                break;
                        }
                    ?>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                    </select>
                    </div>
                    <div class="col">
                    <select name="filtro" class="form-select" aria-label="Default select example">
                    <?php
                        switch ($filtro) {
                            case '1':
                                echo '
                                    <option value="1" selected  >Carnê aberto</option>
                                    <option value="2">Carnê atrasado</option>
                                    <option value="3">Carnê em pago</option>
                                    <option value="0" >Todos</option>
                                ';
                                break;
                            case '2':
                                echo '
                                    <option value="1">Carnê em aberto</option>
                                    <option value="2" selected  >Carnê atrasado</option>
                                    <option value="3">Carnê pago</option>
                                    <option value="0" >Todos</option>
                                ';
                                break;
                            case '3':
                                echo '
                                    <option value="1">Carnê em aberto</option>
                                    <option value="2">Carnê atrasado</option>
                                    <option value="3" selected  >Carnê pago</option>
                                    <option value="0" >Todos</option>
                                ';
                                break;
                            default:
                                echo '
                                    <option value="0" selected  >Todos</option>
                                    <option value="1">Carnê em aberto</option>
                                    <option value="2">Carnê atrasado</option>
                                    <option value="3">Carnê pago</option>
                                ';
                                break;
                        }
                    ?>
                        <!-- <option value="1">Carnê pago</option>
                        <option value="2">Carnê atrasado</option>
                        <option value="3">Carnê em aberto</option> -->
                    </select>
                    </div>
                    <div class="col">
                    <button name="acao" value="busca" type="submit" class="btn btn-primary">Busca</button>
                    </div>
                </div>
                </form>

                <div class="container ">
                <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Nome do Aluno</th>
                    <th scope="col">Total de Horas</th>
                    <th scope="col">Valor Hora</th>
                    <th scope="col">Valor Cobrado</th>
                    <th scope="col">Situação</th>
                    </tr>
                </thead>

                <?php  
                     while ($lista_m = $lista_alunos->fetch(PDO::FETCH_ASSOC)){
                    // $idpassado = $lista_m['id_aluno'];
                    $total_h = $prof_no_sistema->total_hr($lista_m['id_aluno'],$ano,$mes);
                    $total_h = $total_h->fetch(PDO::FETCH_ASSOC);
                    $situacao_mensalidade = $prof_no_sistema->mensalidade_st($lista_m['id_aluno'],$ano,$mes);
                    $situacao_mensalidade = $situacao_mensalidade->fetch(PDO::FETCH_ASSOC);
                ?>
                    <form action="#" method="GET">
                    <tbody>
                    <tr>
                    <?php if ($situacao_mensalidade['situacao_mensalidade'] == $filtro or $filtro == 0){?>
                    <input type="hidden" value="<?php echo '',$mes;?>" name="mes">
                    <input type="hidden" value="<?php echo '',$ano;?>" name="ano">
                    <input type="hidden" value="<?php echo '',$filtro;?>" name="filtro">
                    <input type="hidden" value="<?php echo '',$lista_m['id_aluno'];?>" name="idAluno">
                    <td><?php echo '',$lista_m['nome_aluno'] ; ?></td>
                    <td><?php echo '',$total_h['total'];?>
                    </td>
                    <td>R$ <?php echo '',$lista_m['valor_hora']; ?></td>
                    <td>R$ <?php echo '',$lista_m['valor_hora']*$total_h['total']; ?></td>
                    <td>
                        
                    <?php
                        switch ($situacao_mensalidade['situacao_mensalidade']) {
                            case '3':
                                echo '
                                <select name="nova_situacao" class="form-select btn-success" aria-label="Default select example">
                                    <option selected value="3">Mensalidade paga</option>
                                    <option value="1">Mensalidade em aberto</option>
                                    <option value="2">Mensalidade atrasada</option>
                                ';
                                break;
                            case '2':
                                echo '
                                <select name="nova_situacao" class="form-select btn-danger" aria-label="Default select example">
                                    <option selected value="2">Mensalidade atrasada</option>
                                    <option value="3">Mensalidade paga</option>
                                    <option value="1">Mensalidade em aberto</option>
                                ';
                                break;
                            case '1':
                                echo '
                                <select name="nova_situacao" class="form-select btn-warning" aria-label="Default select example">
                                    <option selected value="1">Mensalidade em aberto</option>
                                    <option value="2">Mensalidade atrasada</option>
                                    <option value="3">Mensalidade em paga</option>
                                ';
                                break;
                            default:
                                # code...
                                break;
                        }
                    ?>
                        </select>
                    </td>
                    <td><input class="btn btn-primary" type="submit" value="Altera" name="altera">
                        
                    </td>
                    <tr>
                    </tr>
                    <?php  } ?>
                    </form>
                <?php  } ?>

                </tbody>
                </table>
                </div>

                </div>
            
            
            <form action="#" method="POST">
                  <div class="p-3 formulario-Header-h2-animacao">
                  <a class="btn btn-primary btn-cd" href="../view/sistema.php?pagina=sistema" role="button">Inicio</a>
                        <!-- <button class="btn btn-success btn-cd" name="acao" value="salva">Salva</button> -->
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