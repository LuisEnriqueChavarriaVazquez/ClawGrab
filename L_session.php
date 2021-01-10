<?php
   include('L_conectDatabase.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select * from usuario where Correo = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['Correo'];
   $login_session_name = $row['Nombre'];
   $login_session_idioma = $row['Idioma'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:formLogIn.php");
      die();
   }
?>