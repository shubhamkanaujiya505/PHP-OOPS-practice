<?php


// public example
// create base class
// class base{

//     // create access modifier
//     public $name;

//     // create constructor
//     public function __construct($n){
//         $this->name = $n;
//     }
//     public function show(){
//         echo "Your name :".$this->name."<br>";
//     }


// }
// // create a object
// $obj = new base("shubham");

// // overwrite properties
// // $obj->name = "Kanaujiya";

// //calling function
// $obj->show();


?>



<?php
// protected example


// create base class
// class base{

//     // create access modifier
//     protected $name;

//     // create constructor
//     public function __construct($n){
//         $this->name = $n;
//     }
//     protected function show(){
//         echo "Your name :".$this->name."<br>";
//     }


// }
// class drived extends base{
//     public function get(){
//         echo "Your name :".$this->name."<br>";
//     }
// }
// // create a object we can access easily
// $obj = new drived("shubham");

// // overwrite properties we can not access because it is protected
// // $obj->name = "Kanaujiya";

// //calling function
// // $obj->show();
// $obj->get();

// we can access from drived class 
?>




<?php


// private example
// create base class
class base{

    // create access modifier
    private $name;

    // create constructor
    public function __construct($n){
        $this->name = $n;
    }
    protected function show(){
        echo "Your name :".$this->name."<br>";
    }


}
class drived extends base{
    public function get(){
        echo "Your name :".$this->name."<br>";
    }
}
// create a object we can access easily
$obj = new drived("shubham");

// overwrite properties we can change the name private properties from drived class
$obj->name = "Sunil";

//calling function
// $obj->show();
$obj->get();

// we can access from drived class 
?>