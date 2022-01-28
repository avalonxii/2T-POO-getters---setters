<?php

class Producto{
    private int $id;
    private string $nombre;
    private int $unidades;
    private float $precio;
    CONST IVA = 1.21;

    //CONTRUCTOR
    public function __construct(int $id , string $nombre , int $unidades , float $precio){
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> unidades = $unidades;
        $this -> precio = $precio;
    }

    //SETTERS--------------------
    public function setId(int $id){
        $this -> id = $id;
    }
    public function setNombre (string $nombre){
        $this -> nombre = $nombre;
    }
    public function setUnidades(int $unidades){
        $this -> unidades = $unidades;
    }
    public function setPrecio(float $precio){
        $this -> precio = $precio;
    }

     //GETTERS--------------------
     public function getId(){
        return $this -> id;
    }
    public function getNombre (){
        return  $this -> nombre;
    }
    public function getUnidades(){
        return $this -> unidades;
    }
    public function getPrecio(){
        return $this -> precio;
    }

    //mostrar informacion 
    public function mostrar (){
        echo "<p> ID: ". $this -> id ."</p>".
            "<p>NOMBRE:". $this -> nombre ."</p>".
            "<p>UNIDADES:". $this -> unidades ."</p>".
            "<p>PRECIO:". $this -> precio . "</p>";
    }
}    
    
    

