<?php
class Usuario{

    protected $cedula;
    protected $nombre;
    protected $apellido;
    protected $username;
    protected $contrasena;
    protected $rol;
    protected $mail;
    protected $telefono;


    function __construct($cedula,$nombre,$apellido,$username,$contrasena,$rol,$mail,$telefono) {
        $this->cedula = $cedula;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->username = $username;
        $this->contrasena = $contrasena;
        $this->rol = $rol;
        $this->mail = $mail;
        $this->telefono = $telefono;
    }

    function get_cedula() {
        return $this->cedula;
      }
      function get_nombre() {
        return $this->nombre;
      }
      function get_apellido() {
        return $this->apellido;
      }
      function get_username() {
        return $this->username;
      }
      function get_contrasena() {
        return $this->contrasena;
      }
      function get_mail() {
        return $this->mail;
      }

      function get_rol() {
        return $this->rol;
      }
      function get_telefono() {
        return $this->telefono;
      }



}




?>