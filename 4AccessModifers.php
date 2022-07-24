<?php
// create base class
class base{

    // create access modifier
    public $name;

    // create constructor
    public function __construct($n){
        $this->name = $n;
    }
    public function show(){
        echo "Your name :".$this->name."<br>";
    }


}
// create a object
$obj = new base("shubham");

// overwrite properties
// $obj->name = "Kanaujiya";

//calling function
$obj->show();


?>