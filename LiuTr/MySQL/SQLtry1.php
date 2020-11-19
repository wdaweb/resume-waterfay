<?php
$dsn="mysql:host=localhost;dbname=students_step3;charset=utf8";
$pdo=new PDO($dsn,'root','');



class Employee
{
    public $Name = '小丸子';
    
    public function ShowName()
    {
        echo '這名員工的名字為'.$this->Name;
    }
}

$a=new Employee();
$a->ShowName();


class Member
{
    private $hi = 'Hi.';
     
    public function __construct()
    {
        echo $this->hi."<br />";
    }
     
    public function showMember()
    {
        echo "<br />";
        echo "id:".$this->id."<br />";
        echo "school_num:".$this->school_num."<br />";
        echo "name:".$this->name."<br />";
        echo "birthday:".$this->birthday."<br />";
        echo "uni_id:".$this->uni_id."<br />";
    }
}
 
$sql = "SELECT * FROM `students` WHERE `id` = 1";
$sth = $pdo->prepare($sql);
$sth->execute();
$sth->setFetchMode(PDO::FETCH_CLASS, 'Member');
$row = $sth->fetch(PDO::FETCH_CLASS);
 
$row->showMember();

echo "<br>";
?>

<?php

class group
{
    static $a="static";
    public $b="public";
    private $c="private";
    protected $d="protected";

    function getprivate(){
        return $this->c;
    }
}

echo group::$a;

$text=new group();
echo $text->b;



class text1 extends group{
    function __construct(){
        echo $this->d;
    }
    function try(){
        return $this->b;
    }
}
$text1=new text1();

$text2=new group();
echo $text2->getprivate();
echo "<br>;"

?>

<?php
class MyClass
{
    public $prop1 = "I'm a class property!";

    public function __construct()          //物件被建立時呼叫訊息。
    {
        echo 'The class "' . __CLASS__ . '" was initiated!<br />';
    }

    public function __destruct()           //物件被結束時呼叫訊息。
    {
        echo 'The class "' . __CLASS__ . '" was destroyed.<br />';
    }

    public function __toString()           //將物件轉換為字串。
    {
        echo "Using the toString method: ";
        return $this->getProperty();
    }

    public function setProperty($newval)
    {
        $this->prop1 = $newval;
    }

    public function getProperty()
    {
        return $this->prop1 . "<br />";
    }
}

class MyNewClass extends MyClass
{
    public function newMethod()           //在新類別裡宣告一個屬性與方法。
    {
        echo 'From a new method in "' . __CLASS__ . '".<br />';
    }
}


$obj = new MyNewClass;                    //建立`MyNewClass`的新物件。

echo $obj->newMethod();                   //呼叫物件到新類別的`newMethod()`。

echo $obj->getProperty();                 //呼叫繼承父類別的`getProperty()`。

