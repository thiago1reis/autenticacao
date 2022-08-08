<?php 
    //Verifica se já existe uma sessão iniciada, caso tenha ela é finalizada
    session_start();
    if(isset($_SESSION['nome']) and ($_SESSION['id'])){
        header("Location:login/logout.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Autenticar</title>
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <div class="login">
            <div class="form-login" >
                <form method="POST" action="login/login.php">
                    <label>E-mail:</label><br>
                    <input  type='email' name='email' placeholder='Digite o e-mail'>
                    <label>Senha:</label><br>
                    <input type='password' name="senha" placeholder='Digite a senha'>
                    <input type="submit" value="Entrar">
                </form>
            </div>
        </div>    
    </body>
</html>