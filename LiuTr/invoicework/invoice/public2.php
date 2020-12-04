<h2>物件導向</h2>
<?php

class Animal
{
    public $haircolor = "brown";
    public $eyes = "black";
    protected $food = "apple";
    private $weight = "100kg";

    public function __construct()
    {
        echo "我己被實體化了";
    }
    public function sound()
    {
        echo "吼吼吼";
    }

    public function run()
    {
        echo "跑跑跑";
        $this->mind();
        $this->eat();
    }

    protected function eat()
    {
        echo "一起吃";
    }

    private function mind()
    {
        echo "心情好";
    }
}

$animal = new Animal;

echo $animal->haircolor;
echo "<br>";
echo $animal->eyes;
echo "<br>";
$animal->sound();
echo "<br>";
$animal->run();
echo "<br>";
/* $animal->jump();
echo "<br>"; */

echo "<hr>以下是貓class";
class Cat extends Animal
{

    public function sound()
    {
        echo "喵~~~~~~";
    }
    public function __construct()
    {
        $this->haircolor = '橘色的';
        $this->eyes = '寶藍色';
    }

    public function jump()
    {
        echo "我會跳";
    }
    public function run()
    {
        echo "慢慢跑";
        parent::eat();
        parent::mind();
    }
}

$cat = new Cat;
echo "<br>";
echo $cat->haircolor;
echo "<br>";
echo $cat->eyes;
echo "<br>";
$cat->sound();
echo "<br>";
$cat->run();
echo "<br>";
$cat->jump();

?>