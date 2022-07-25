<?php
class abc{
    private $conn;
    public function __construct(){ // automatically call connect database
        $this->conn = mysqli_connect();
    }
    public function hello(){
        echo "this is hello"."<br>"; 
    }
    public function __destruct(){ // automatically call close database
        mysqli_close($this->conn);
    }
    
}

$obj = new abc();
$obj->hello();
?>