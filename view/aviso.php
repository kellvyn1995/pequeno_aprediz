<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../estilo/diario.css">
    <title>Aviso</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="imagem">
                 
            </div>
            <div class="contem">
                <form class="form" id="form" action="../view/sistema.php?pagina=sistema" method="POST">

                    <div class="form-control ">
                        <label for="userUsuario">AVISO!</label>
                    </div>
                 
                    <div class="form-control ">
                        <?php
                            switch ($_GET['aviso']) {
                                case '01':
                                    echo '<p>Novo Professor Cadastrado.</p>';
                                    break;
                            case '02':
                                echo '<p>Sua solicitação fui realizada com sucesso.</p>';
                                break;
                            case '03':
                                echo '<p>Novo Aluno Cadastrado.</p>';
                                break;
                            case '04':
                                echo '<p>Todos os campos são obrigatorios.</p>';
                                break;
                            case '05':
                                echo '<p>Acesso negado.</p>';
                                break;
                                default:
                                    echo '<p>Problema no sistema entre em contato com Administrado.</p>';
                                    break;
                            }
                        ?>
                    </div>
                    
                    <button type="submit" name="acao" value="inicio" >Inicio</button>
                </form>
            </div>
        </div>
    </div>
</script>
</body>
</html>