<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>novo usuario</title>
</head>
<body>
   cadastra novo usuario:
   <form action="../controller/novo_usuario.php" method="POST">
       <label for="">nome professor</label>
       <input type="name" name="nome"> <br>
       <label for="">email professor</label>
       <input type="email" name="email"> <br>
       <label for="">telefone professor</label>
       <input type="text" name="telefone"> <br>
       <label for="">semana professor</label>
       <input type="text" name="semana"> <br>
       <label for="">senha professor</label>
       <input type="password" name="senha"> <br>
       <button type="submit">Cadastra</button>
   </form> 
</body>
</html>