<?php
//create class
class base{
    // if we make static
    public static $name = "shubham";
    //public $name = "shubham";
     public static function sum(){
        // must use self 
        echo self::$name;
        // echo $this->name; // we can not use this operator

        //make constructor
    }
    public function __construct($n){
        // self::sum();
        self::$name = $n;
    }
    
}
class drived extends base{
    
        public static function show(){
            echo self::$name;
        }
}


// echo base::$name; // use static variable
// base::sum(); // calling function
// we not need to make object for static proprties
// $obj = new base("wow");
$obj = new base();
$obj->sum();
?>