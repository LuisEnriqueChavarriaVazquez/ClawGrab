<?php
include("L_conectDatabase.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['mail'])) {
        $mail = $_POST["mail"];
    } else {
        echo "Missing value in mail.";
    }

    if (isset($_POST['pass'])) {
        $pass = $_POST["pass"];
    } else {
        echo "Missing value in password.";
    }

    $sql = "SELECT IDUsuario FROM usuario WHERE Correo = '$mail' and Contra = '$pass'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $mail and $pass, table row must be 1 row

    if ($count == 1) {
        $_SESSION['login_user'] = $mail;

        header("location: home.php");
    } else {
        $error = "Your Login Name or password is invalid";
    }
}
