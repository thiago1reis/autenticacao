<?php 
    session_start();
    include_once "login/verifica_login.php";
?>
<?php 
   ?>
   <!DOCTYPE html>
   <html lang="pt-br">
       <head>
           <meta charset="utf-8">
           <title>Sistema</title>
           <link rel="stylesheet" href="css/estilo.css">
       </head>
       <body>
           <div class="login">
               <div class="form-login" >
                   <form action="login/logout.php">
                       <label>Nome</label><br>
                       <input type='text' value=<?= $_SESSION['nome']; ?> disabled>
                       <label>E-mail:</label><br>
                       <input type='email' value=<?= $_SESSION['email']; ?> disabled>
                       <label>Status:</label><br>
                       <input type='text' value=<?php if($_SESSION['status']){ echo "Ativo";} ?> disabled>
                       <input type="submit" value="Sair">
                   </form>
               </div>
           </div>    
       </body>
   </html>

