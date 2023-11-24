<?php

class Animal{
    public $name;

    public function setName($name){
        $this->name=$name;
    }
}
$animal=new Animal; //實例化

echo '顯示名稱:'.$animal->name;
echo "<br>";
$animal->setName('佩君');
echo '顯示名稱:'.$animal->name;
echo "<br>";

?>