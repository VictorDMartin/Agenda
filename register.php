<?php
    
    require_once "config.php";
    // Obtém as informações do usuário do formulário
    if(isset($_POST['btnRegister'])){
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
    // Insere onde vai no banco após a página mandar um post 
        $sql = "INSERT INTO register(idName, idUser, idPassword) 
        VALUES('$name', '$username', '$password')";
        mysqli_query($conn,$sql);
    // Redirecionar o usuario para a tela de login
    
    header("Location: login.html");
    exit();
    }

    
?>

