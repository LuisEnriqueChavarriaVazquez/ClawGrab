<?php

$showAlert = false;
$showError = false;
$exists = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Validamos la conexion
    include 'L_conectDatabase.php';
    include 'L_session.php';

    //Validamos la parte del trabajo con los inputs
    if (isset($_POST['name'])) {
        $name = $_POST["name"];
    } else {
        echo "Missing value in name.";
    }

    if (isset($_POST['keyOne'])) {
        $keyOne = $_POST["keyOne"];
    } else {
        echo "Missing value in keyOne.";
    }

    if (isset($_POST['keyTwo'])) {
        $keyTwo = $_POST["keyTwo"];
    } else {
        echo "Missing value in keyTwo.";
    }

    if (isset($_POST['keyThree'])) {
        $keyThree = $_POST["keyThree"];
    } else {
        echo "Missing value in keyThree.";
    }

    if (isset($_POST['file'])) {
        $file = $_POST["file"];
    } else {
        echo "Missing value in file.";
    }

    //Get IDUsuario de la sesion
    $IDUsuario = $login_session_idFileUser;

    //Valores del archivo
    $nombre_file = $_FILES[$file]['name'];
    $tipo_file = $_FILES[$file]['type'];
    $tamano_file = $_FILES[$file]['size'];

    //Definimos el tamano
    if($tamano_file <= 1000000){
        $carpeta_destino = $_SERVER['DOCUMENT_ROOT'],'/ClawGrab/proyecto principal';
    }else{
        echo "El archivo es realmente pesado";
    }

    //$archivo_objetivo = fopen();

    $sql = "INSERT INTO compartircodigo (IDCompartir,IDUsuario,Palabra_Clave_1,Palabra_Clave_2,Palabra_Clave_3,Archivo_Cod) VALUES (DEFAULT,'" . $IDUsuario . "', '" . $name . "', '" . $keyOne . "','" . $keyTwo . "','" . $keyThree . "','" . $file . "')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $showAlert = true;
        header('Location: comunidadHome.php');
    }else{
        echo "fallo";
    }
}//end if    
