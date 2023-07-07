<?php
    require_once "config.php";
// Método de verificação se já foi registrado
    if(isset($_POST['btnLogin'])){
        $username = "'%".$_POST['username']."%'";
        $user = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM register WHERE idUser LIKE $username";
        

        $resultado = mysqli_query($conn,$sql); 
        if($resultado && mysqli_num_rows($resultado) > 0){
            $lista = mysqli_fetch_assoc($resultado);


        }
        $pass = password_hash($lista['idPassword'], PASSWORD_DEFAULT);

        if ($user === $lista['idUser'] && password_verify($password,$pass)) {

            header("Location: index.php");

        }else{

            header("Location: Login.html");

        }
    }







?>