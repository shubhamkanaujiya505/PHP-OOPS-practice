<?php
// class too{
//     private $name = "Shubham";
//     public function __get($name){
//         echo "you are trying to access non existing or private property ($name)";
//     }


// }
// $object = new too();
// $object->name;
?>



<?php

class too{
    private $data = ["name"=>"Shubham","age"=>"20","course"=>"MCA"]; 
    public function __get($key){
        if(array_key_exists($key,$this->data)){
            return $this->data[$key];
        }else{
            return "this key ($key) is not defined";
        }
    }
}
$object = new too();
echo $object->height;

?>