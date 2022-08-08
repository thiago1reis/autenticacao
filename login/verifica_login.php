<?php
    //Verifica se usuário fez login para poder acessar a página.
    if($_SESSION['nome'] == null and $_SESSION['id'] == null){
        header("Location:../index.php");
    }

  