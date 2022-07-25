<?php

// define a trait function to call any class 
trait hello{ // trait is the first priority to give output
    // public function sayhello(){
    private function sayhello(){
        echo "Hello from hello trait "."<br>";
    }
    
}
// trait hi{ // trait is the first priority to give output
//     public function sayhello(){
//         echo "Hello from hi trait"."<br>";
//     }
    
// }
class base{
    public function __construct()
    {
        
    }

   // use hello,hi; // this trait is not work because we cannot use two trait function together
    use hello{
        hello::sayhello as public newhello;
    }
    // hi{
    //     hello::sayhello insteadof hi;
    //     hi::sayhello as newhello;
    // } 

    // // use trait function like this
    // use hello;

    // problem comming
    // public function sayhello(){
    //     echo "Hello world"."<br>";
    // }
}
// class basechild extends base{
//     use hello;
//     public function sayhello(){
//         echo "Hello from child class"."<br>"; // first priority to print
//     }

// } 
$obj = new base(); 
// $obj->sayhello(); //output hello
$obj->newhello(); 
?> 