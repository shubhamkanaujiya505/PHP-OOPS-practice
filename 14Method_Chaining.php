<?php
class abc{
    public function first(){
        echo "this is first function"."<br>";
        return $this; //use for method chaning
    }
    public function second(){
        echo "this is second function"."<br>";
        return $this;
    }
    public function third(){
        echo "this is third function\n";
    }
}
$obj = new abc();

$obj->first()->second()->third();
// $obj->first();
// $obj->second();
// $obj->third();
?>