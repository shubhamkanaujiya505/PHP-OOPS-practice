<?php

// require "first.php";
// require "second.php";

function __autoload($class){
    require"$class".".php";
}
$obj = new first();
$obj = new second();

?>