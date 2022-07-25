<?php

// define a trait function to call any class 
trait hello{
    public function sayhello(){
        echo "Hello world"."<br>";
    }
}

// define a another trait function to call any class 
trait bye{
    public function saybye(){
        echo "bye-bye world"."<br>";
    }
}

// create class 1 
class base{
    public function __construct()
    {
        
    }

    // use trait function like this
    use hello;
    use bye; // use another trait function

}

// create another class to call the trait function
class base2{
    public function __construct()
    {
        
    }
    // use trait function like this
    use hello;

}

// create object of class
$obj = new base(); 
// $obj2 = new base2(); 


// calling function
$obj->sayhello();
// $obj2->sayhello();
$obj->saybye();
?>