<?php

// 定義一個 Animal 類別
class Animal {
    // 定義一個受保護的屬性 $name
    protected $name;

    // 建構子方法，初始化 $name 屬性
    public function __construct($name) {
        $this->name = $name;
    }

    // 設定 $name 屬性的方法
    public function setName($name) {
        $this->name = $name;
    }

    // 取得 $name 屬性的方法
    public function getName() {
        return $this->name;
    }
}

// 創建一個 Animal 物件，並傳入名稱 '商品'
// $animal = new Animal('商品'); // 實例化

// 輸出 Animal 物件的名稱，顯示為 '商品'
// echo '顯示名稱:' . $animal->getName();
// echo "<br>";

// 設定 Animal 物件的名稱為 '佩君'
// $animal->setName('佩君');
// 再次輸出 Animal 物件的名稱，顯示為 '佩君'
// echo '顯示名稱:' . $animal->getName();
// echo "<br>";

// 直接設定 $animal 物件的屬性 $name 為 '哈囉'
// $animal->name = '哈囉';
// 輸出 $animal 物件的屬性 $name
// echo '顯示名稱:' . $animal->name;
// echo "<br>";




// 定義一個 Dog 類別，它繼承自 Animal 類別
class Dog extends Animal {
    // 定義一個 sit 方法，用來輸出 "坐下"
    function sit() {
        echo "坐下";
    }
}

// 創建一個名為 $dog 的 Dog 物件，並傳入名稱 '熊熊'
$dog = new Dog('熊熊');

// 輸出 $dog 物件的名稱，使用 Animal 類別中的 getName 方法
echo $dog->getName();

// 呼叫 $dog 物件的 sit 方法，輸出 "坐下"
echo $dog->sit();

// 輸出換行符號
echo "<br>";

// 設定 $dog 物件的名稱為 '蔡梗'
echo $dog->setName('蔡梗');

// 再次輸出 $dog 物件的名稱
echo $dog->getName();

// 再次呼叫 $dog 物件的 sit 方法，輸出 "坐下"
echo $dog->sit();
