<?php

// create class
class employee{

    // create a instance variable
    public $name;
    public $age;
    public $salary;

    // create a constructor for assigning the value of instance variable
    function __construct($name, $age, $salary){
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
    // create  a function for show the value 
    function info(){
        echo "<h3>Employee profile</h3>";
        echo "Employee name: " . $this->name."<br>";
        echo "Employee age: " . $this->age."<br>";
        echo "Employee salary: " . $this->salary."<br>";
    }

}
// create a drived class 
class manager extends employee{ // properties inherited from employee
    public $ta = 1000;
    public $phone = 400;
    public $totalSalary;
    // create a method 
    function info(){        
        $this->totalSalary = $this->salary + $this->ta + $this->phone;
        // show manager salary
        echo "<h3>Manager profile</h3>";
        echo "Employee name: " . $this->name."<br>";
        echo "Employee age: " . $this->age."<br>";
        echo "Employee salary: " . $this->totalSalary."<br>";

    }
}

// create a object for class employee
$obj1 = new manager("Subash","56","100000");
$obj = new employee("Shubham","22","60000");

//calling the method
$obj1->info();
$obj->info();


?>