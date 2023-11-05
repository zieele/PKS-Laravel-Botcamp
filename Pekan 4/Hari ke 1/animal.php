<?php
    class Animal 
    {
        public $name;
        public $legs = 4;
        public $cold_blood = "no";
        public function __construct($string){
            $this->name = $string;
        }
    }
    
    class Ape extends Animal
    {
        public $legs = 2;
        public function yell()
        {
            echo "Yell : Auooo";
        }
    }
    
    class Frog extends Animal
    {
        public function jump()
        {
            echo "Jump : hop hop";
        }
    }
?>