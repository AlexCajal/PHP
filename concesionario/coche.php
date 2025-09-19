<?php
    class Coche{
        public $matricula;
        public $marca;
        public $modelo;
        public $km;

        function __construct($matricula, $marca, $modelo, $km){
            $this->matricula = $matricula;
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->km = $km;
        }
        function muestra(){
            echo "<li>";
            echo "<p>Matrícula: ".$this->matricula."</p>";
            echo "<p>Marca: ".$this->marca."</p>";
            echo "<p>Modelo: ".$this->modelo."</p>";
            echo "<p>Km: ".$this->km."</p>";
            echo "</li>";
        }
        function get_Matricula(){
            return $this->matricula;
        }
        
    }
?>