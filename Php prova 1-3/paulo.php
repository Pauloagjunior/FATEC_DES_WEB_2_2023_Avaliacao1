
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['nome'] == 'fatec' and $_POST['senha'] == 'araras'){
        $_SESSION['loggedin'] = TRUE;
         header("location: pag2.php");
    } else {
        $_SESSION['loggedin'] = FALSE;
    }
}


?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu sistema</title>
</head>
<body>
<form method = "post">
    <h1>Insira seu nome</h1>
    <input type="text" name="nome">
    <h1> insira sua senha</h1>
    <input type="password" name="senha"> 
    <button type="submit">Confirmar</button>
</form>
    
</body>
</html>




