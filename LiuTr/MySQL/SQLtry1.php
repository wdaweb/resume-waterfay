<?php
$dsn="mysql:host=localhost;dbname=students;charset=utf8";
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





?>





