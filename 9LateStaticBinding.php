<?php
// create class
class base{
   protected static $name = "Hello";
    public function show(){
        echo self::$name."<br>";
        echo static::$name;
    }
} 
class derived extends base{
    protected static $name = "world";
}

// $test = new base();
$test = new derived(); //output hello because we call base class and in this class declear self

$test->show();
?>