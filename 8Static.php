<?php
//create class
class base{
    // if we make static
    public static $name = "shubham";
    //public $name = "shubham";
     public static function sum(){
        // must use self 
        echo self::$name;
        // echo $this->name;

        //make constructor
    }
    public function __construct($n){
        // self::sum();
        self::$name = $n;
    }
}
// echo base::$name;
// base::sum();
// we not need to make object for static proprties
$obj = new base("wow");
$obj->sum();
?>