<?php

// create class 
class person{
    public $name,$age; //assign properties
    
    // create constructor with passing argumnets
    function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }

    // create a function 
    function show(){
        echo $this->name."-".$this->age."<br>"; //display name and age
    }

}
// create a object
$obj1 = new person("ram","15");

// assign the values to the object
$obj2 = new person("rajkumar","45");

$obj1->show(); // calling the function
$obj2->show(); // calling the function

?>