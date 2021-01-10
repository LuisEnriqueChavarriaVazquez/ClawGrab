<?php
  class Usuario {
  private $nombre;
  private $edad;
  private $pais;
  private $correo;
  private $idioma;
  private $password;

  function __construct($nombreEntrada,$edadEntrada,$paisEntrada,$correoEntrada,$idiomaEntrada,$contraEntrada) {
    $this->name = $nameEntrada;
    $this->edad = $edadEntrada;
    $this->pais = $paisEntrada;
    $this->correo = $correoEntrada;
    $this->idioma = $idiomaEntrada;
    $this->password = $contraEntrada;
  }

  function get_nombre() {
    return $this->name;
  }

  function set_nombre($nombreEntrada){
    $this->name = $nameEntrada;
  }
  
  function get_edad() {
    return $this->edad;
  }

  function set_edad($edadEntrada){
    $this->edad =(int) $edadEntrada;
  }

  function get_Pais() {
    return $this->pais;
  }

  function set_Pais($paisEntrada){
    $this->pais = $paisEntrada;
  }
  
  function get_Correo() {
    return $this->correo;
  }

  function set_Correo($correoEntrada){
    $this->correo = $correoEntrada;
  }

  function get_Idioma() {
    return $this->idioma;
  }

  function set_Idioma($idiomaEntrada){
    $this->correo = $idiomaEntrada;
  }

  function get_Password() {
    return $this->password;
  }

  function set_Password($contraEntrada){
    $this->password = $contraEntrada;
  }
  }
?>