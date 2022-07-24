<?php
class base{
    public $name = "shubham kanaujiya";

}
class drived extends base{
    public $name = "kanaujiya shubham";
}
$object = new base();
$object1 = new drived();
echo $object->name."<br>";
echo $object1->name;

?>