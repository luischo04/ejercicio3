<?php

    class Conexion{
        static public function cBD(){
            $bd = new PDO("mysql:host=localhost;dbname=ejercicio","root","");

            return $bd;
        }
        
    }

    

?>