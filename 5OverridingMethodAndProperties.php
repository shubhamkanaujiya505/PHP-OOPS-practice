<?php
// class base{
//     public $name = "shubham kanaujiya";

// }
// class drived extends base{
//     public $name = "kanaujiya shubham";
// }
// $object = new base();
// $object1 = new drived();
// echo $object->name."<br>";
// echo $object1->name;

?>




<?php

// method overridings
class base{
    public $name = "shubham kanaujiya";
    public function cal($a, $b){
        return $a * $b;
    }

}
class drived extends base{
    public $name = "kanaujiya shubham";
    public function cal($a, $b){
        return $a + $b;
    }
}
// $object = new base();

$object1 = new drived();

// echo $object->cal(5,8);

echo $object1->cal(5,8);

?>