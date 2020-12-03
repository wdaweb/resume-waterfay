<h2>物件導向</h2>
<?php

class animal{
    public $haircolor="brown";
    public $eyes="black";
    protected $food="apple";
    private $weight="100kg";

    public function sound(){
        echo "吼吼吼";
    }
    public function run(){
        echo "跑跑跑";
        $this->mind();
        $this->eat();
    }
    protected function eat(){
        echo "一起吃";
    }
    private function mind(){
        echo "心情好";
    }
}

$animal =new Animal;

echo $animal ->haircolor;
echo "<br>";
echo $animal ->eyes;
echo "<br>";
$animal->sound();
echo "<br>";
$animal->run();
echo "<br>";

echo "<hr>以下是貓class";
class Cat extends Animal{
    public $haircolor="orange";
    public $eyes="brown";

    public function sound(){
        echo "喵~~~~~~~~~~~~~";
    }
    public function jump(){
        echo "我會跳";
    }
    public function run(){
        echo "慢慢跑";
        parent ::eat();
        parent ::mind();

    }
}

$animal =new Cat;
echo"<br>";
echo $animal ->haircolor;
echo "<br>";
echo $animal ->eyes;
echo "<br>";
$animal->sound();
echo "<br>";
$animal->run();
echo "<br>";


?>