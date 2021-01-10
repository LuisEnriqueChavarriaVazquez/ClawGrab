<?php 
 class conectoBaseDatos {
   private  $dbServername="localhost";
   private $dbUsername="root";
   private $dbPassword="ramv1357";
   private $dbName="ClawGrab";
   private $conn;
 }
   function conectar (){
     $this->conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
   }

?>