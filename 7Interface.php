<?php
// create interface class 

interface parentClass1{
    public function sum($a, $b);

}
interface parentClass2{
    public function sub($c, $d);
}
class childClass implements parentClass1, parentClass2{
    public function sum($a, $b){
        echo $a + $b."<br>";
    }
    public function sub($c, $d){
        echo $c - $d;
    }
}

$obj = new childClass();
$obj->sum(5,6);
$obj->sub(5,6);

?>