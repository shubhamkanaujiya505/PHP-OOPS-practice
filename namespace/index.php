<?php

require 'products.php';
require 'testing.php';

function wow(){
    echo "wow from index file";
}

//for long name
use pro\v1\command as cmd;

// $obj = new test\product();
// $obj1 = new pro\product();
// $obj1 = new pro\product();
// $obj1 = new pro\v1\command();
$obj1 = new cmd\product();

// wow();
$obj1->wow();
// wow();

?>
