<?php 
require_once('./conexionDB.php');
require_once('./entidadUsuario.php');

class accionesUsuario {
 
  function save(Usuario $usuarioEntrada){
     $sql="insert into Usuario (Nombre,Edad,Pais,Correo,Idioma,Contra) values('".$usuarioEntrada->get_nombre()."',".
     $usuarioEntrada->get_edad().",'".$usuarioEntrada->get_Pais()."','".$usuarioEntrada->get_Correo()"','".$usuarioEntrada->get_Idioma().
     "','".$usuarioEntrada->get_Password()."')";
     $db=new objetoBaseDatos();
     $db->conectar();
     mysql_query($db->obtenerObjetoConexion(),$sql);
  }

}

?>