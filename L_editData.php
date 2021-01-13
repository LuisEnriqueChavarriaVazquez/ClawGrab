<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include 'L_conectDatabase.php';

    if(isset($_POST['username'])){
        $username = $_POST["username"];
    }else{echo "Missing value in name.";}

    if(isset($_POST['language'])){
        $idiom = $_POST["language"];
    }else{
        $idiom = "english";
    }

    if(isset($_POST['country'])){
        $country = $_POST["country"];
    }else{echo "Missing value in country.";}

    if(isset($_POST['mail'])){
        $mail = $_POST["mail"];
    }else{echo "Missing value in mail.";}

    if(isset($_POST['pass'])){
        $password = $_POST["pass"];
    }else{echo "Missing value in password.";}

    if(isset($_POST['age'])){
        $age = $_POST['age'];
    }else{echo "Missing value in age.";}
    

    $sql = "UPDATE usuario SET Nombre= '$username',Edad= '$age',Pais= '$country',Idioma='$idiom',Contra='$password' WHERE Correo = '$mail'";
    
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('Location: home.php');
    }else{
        echo "Fallo en el update" . mysqli_error($conn);
        echo $username;
    }
}//end if    
