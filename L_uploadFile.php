<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Validamos la conexion
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

    //Get IDUsuario de la sesion
    $IDUsuario = $login_session_idFileUser;
    $IDUsuario = intval($IDUsuario);

    //Valores del archivo
    $nombre_file = $_FILES['file']['name'];
    $tipo_file = $_FILES['file']['type'];
    $tamano_file = $_FILES['file']['size'];

    //Definimos el tamano
    if($tamano_file <= 2000000){
        $carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/ClawGrab/uploads/';
        move_uploaded_file($_FILES['file']['tmp_name'],$carpeta_destino.$nombre_file);
    }else{
        echo "El archivo es realmente pesado";
    }
    
    $archivo_objetivo = fopen($carpeta_destino . $nombre_file , "r");
    $contenido = fread($archivo_objetivo, $tamano_file);
    $contenido = addslashes($contenido);
    fclose($archivo_objetivo);

    $sql = "INSERT INTO compartircodigo (IDCompartir, IDUsuario, Nombre ,Palabra_Clave_1,Palabra_Clave_2,Palabra_Clave_3,Archivo_Code,NombreArchivo) VALUES (DEFAULT,$IDUsuario, '$name', '$keyOne','$keyTwo','$keyThree','$contenido','$nombre_file')";
    $result = mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        header('Location: comunidadHome.php');
    }else{
        echo mysqli_affected_rows($conn) . " ";
        echo "fallo" . $nombre_file;
    }
}//end if    
