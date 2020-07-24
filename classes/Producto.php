<?php
class Producto{

    protected $SKU;
    protected $nombre;
    protected $descripcion;
    protected $imagen;
    protected $categoria;
    protected $stock;
    protected $precio;


    function __construct($SKU,$nombre,$descripcion,$imagen,$categoria,$stock,$precio) {
        $this->SKU = $SKU;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->imagen = $imagen;
        $this->categoria = $categoria;
        $this->stock = $stock;
        $this->precio = $precio;
    }

    function get_SKU() {
        return $this->SKU;
      }

      function get_nombre() {
        return $this->nombre;
      }
      function get_descripcion() {
        return $this->descripcion;
      }
      function get_imagen() {
        return $this->imagen;
      }
      function get_categoria() {
        return $this->categoria;
      }
      function get_stock() {
        return $this->stock;
      }
      function get_precio() {
        return $this->precio;
      }



}




?>