<?php
class Animal{


}
interface bark{

    function b();
}

class Dog extends Animal implements bark{
    function b(){
        return "汪汪汪";
    }
}

class Cat extends Animal implements bark{
    function b(){
        return "喵喵喵";
    }
}

$dog=new Dog;
$cat=New cat;

echo $dog->b();
echo "<br>";
echo $cat->b();