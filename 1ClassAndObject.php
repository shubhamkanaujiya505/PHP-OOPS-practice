<?php

class calculation{
        public $a, $b, $c; // create variable
        function sum(){ // create methods
        $this->c = $this->a + $this->b; // using this keyword to access the variable
        return $this->c; // return c
        }  
 
        function sub(){ // create methods
        $this->c = $this->a - $this->b; // using this keyword to access the variable
        return $this->c; // return c
        }   
     }
        $c1 = new calculation();
        $c1->a=10;
        $c1->b=10;
 
        $c2 = new calculation();
        $c2->a=100;
        $c2->b=50;


        echo " ".$c1-> sum() . "\n";
        echo $c2-> sub();
?>