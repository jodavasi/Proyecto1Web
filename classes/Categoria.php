<?php
class Categoria{

    protected $nombre;

    function __construct($nombre) {
        
        $this->nombre = $nombre;
        
    }

    

      function get_nombre() {
        return $this->nombre;
      }



}