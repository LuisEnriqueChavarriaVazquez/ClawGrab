<?php
 require_once('./usuarioAcciones.php');
 require_once('./entidadUsuario.php');

$accionRealizar=$_POST["accion"];
$sqlQuery="";
   switch($accionRealizar){
     case "registroUsuario":
         $objDinUsuario=new accionesUsuario();
         $entidadUsuario=new Usuario();
         $entidadUsuario->set_nombre($_POST["txtNombre"]);
         $entidadUsuario->set_edad((int) $_POST["txtEdad"]);
         $entidadUsuario->set_Pais($_POST["txtPais"]);
         $entidadUsuario->set_Correo($_POST["txtMail"]);
         $entidadUsuario->set_Idioma($_POST["txtIdioma"]);
         $entidadUsuario->set_Password($_POST["txtPassword"]);
         $objDinUsuario->save($entidadUsuario);
         $objDinUsuario->cerrarConexion();
         header("home.php");
      break;

   }
?>