<?php
    require_once "../conexao/conexao.php";
    //Verifica se usuário digitou o email
    if(filter_input(INPUT_POST, 'email')){
        $email = filter_input(INPUT_POST, 'email');
    }else{
        echo"<script> 
                window.alert('Por favor, digite seu e-mail!')
                window.location.href='../index.php';
            </script>";           
    }
    //Verifica se usuário digitou a senha
    if(filter_input(INPUT_POST, 'senha')){
        $senha = filter_input(INPUT_POST, 'senha');
    }else{
        echo"<script>
                window.alert('Por favor, digite sua senha')
                window.location.href='../index.php';
            </script>";           
    }
    try {
        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $consulta = $conexao->query($sql);
        if($usuario = $consulta->fetch()){
            if($usuario['status']){
                session_start();
                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];
                $_SESSION['email'] = $usuario['email'];
                $_SESSION['status'] = $usuario['status'];
                header("Location:../sistema.php");
            }
            else{
                echo"<script>
                        window.alert('Usuário desativado.')
                        window.location.href='../index.php';
                    </script>"; 
            }
        }
        else{
            echo"<script>
                    window.alert('Email ou senha estão incorretos.')
                    window.location.href='../index.php';
                </script>";
        }      
    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
       
  

   