<?php

class Animal{
    // public $name;
    protected $name;

    public function __construct($name) 
    {
        $this->name=$name;
    }

    public function setName($name){
        $this->name=$name;
    }
    public function getName(){
        return $this->name;
    }
}
$animal=new Animal('商品'); //實例化

echo '顯示名稱:'.$animal->getName();
echo "<br>";
$animal->setName('佩君');
echo '顯示名稱:'.$animal->getName();
echo "<br>";
// $animal->name='哈囉';
// echo '顯示名稱:'.$animal->name;
echo "<br>";
?>