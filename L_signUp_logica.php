<?php

$showAlert = false;
$showError = false;
$exists = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include 'L_conectDatabase.php';

    if(isset($_POST['username'])){
        $username = $_POST["username"];
    }else{echo "Missing value in name.";}

    if(isset($_POST['age'])){
        $age = $_POST["age"];
    }else{echo "Missing value in age.";}

    if(isset($_POST['country'])){
        $country = $_POST["country"];
    }else{echo "Missing value in country.";}

    if(isset($_POST['mail'])){
        $mail = $_POST["mail"];
    }else{echo "Missing value in mail.";}

    if(isset($_POST['pass'])){
        $password = $_POST["pass"];
    }else{echo "Missing value in password.";}

    if(isset($_POST['cpass'])){
        $cpassword = $_POST["cpass"];
    }else{echo "Missing value in confirm password.";}

    if(isset($_POST['language'])){
        $idiom = $_POST['language'];
    }else{echo "Missing value in language.";}
    

    $sql = "Select * from usuario where nombre='$username'";

    $result = mysqli_query($conn, $sql);

    // la query sql verifica que el usuario con ese nombre no este registrado
    if (($password == $cpassword)) {
        //Insertamos la data
        $sql = "INSERT INTO usuario (IDUsuario,Nombre,Edad,Pais,Correo,Idioma,Contra) VALUES (DEFAULT,'" . $username . "', '" . $age . "', '" . $country . "','" . $mail . "','" . $idiom . "','" . $password . "')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $showAlert = true;
            header('Location: formLogin.php');
        }
    } else {
        $showError = "Passwords do not match";
    }
}//end if    
