<?php
// without type-hinting
// function sum($a){
//     echo $a+10;
// }
// // sum(20);
// sum("hello");
?>


<?php
// with type-hinting
// function sum(int $a){
//     echo $a+10;
// }
// // sum(20);
// sum("hello");
?>


<?php
// with type-hinting using array
// function fruits(array $names){
//     foreach($names as $name){
//         echo $name . "<br>";
//     }
// }
// $test = ["apple","orange","banana"];
// fruits($test);
?>


<?php
// with type-hinting using array
// function fruits(array $names){
//     foreach($names as $name){
//         echo $name . "<br>";
//     }
// }
// $test = ["apple","orange","banana"];
// fruits($test);
// ?>


<?php
// advance example 
class school{
    public function getName(student $names){
        foreach($names->Names() as $name){
            echo $name ."<br>";
        }
    }
}
class student{
    public function Names(){
        return ["Ram","Krishna","Gopal"];
    }
}
class liberary{

}
$lib = new liberary();
$stu = new student();
$sch = new school();
$sch->getName($stu); 
 ?>