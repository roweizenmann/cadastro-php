<?php

    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
        $result = $conexao->query($sql);
        if(mysqli_num_rows($result) <1 ){
            print_r('Não existe');
        } else {
            print_r('Existe');
        }
    } else {
        header('Location: login.php');
    }
?>