<?php      include("conexaobd.php");
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Re-Escreva</title>

    <link rel="stylesheet" type="text/css" href="custom.css">

    

</head>
<body style="background-color: rgb(7, 39, 65);">
    <div  class="container2">
    <label   style="font-size:40px; font-family:cursive; margin-top: 30%; margin-left: 25%; " > Re-Escreva </label> 
    </div>
    <div class="container">
    

    <div class="container" > 

    <div class="box">

    <form action="reda.php" id="form1">
    <div class="borda">

    <h2 class="titulo" > Login </h1>

    </div>

    <label class="font"> Nome de usuario</label>
    <br>
    <input  type="login" required > 
    <br>
    <br>
    <label class="font"> Senha </label>
    <br>
    <input   type="password" required>
    <br><br>
    <p>
    <a  href="passrec.php"> Esqueci minha senha</a>
    <br>
    <a href="cadastro.php"> Cadastrar </a>
    </p>
    <button class="button" type="submit" form="form1" value="Submit">Entrar</button>
</div>

</div>
    </form>
    
</body>
</html>