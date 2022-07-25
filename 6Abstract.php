<?php
// create a class
abstract class parentClass{
    public $name;
    // function must be decleared not implement
    abstract protected function cal($a, $b);
}
class childClass extends parentClass{
    // pass as same parameter as parentclass
    public function cal($c, $d){
       echo $c + $d;
    }
}
$obj = new childClass();
$obj->cal(5,4);

?>