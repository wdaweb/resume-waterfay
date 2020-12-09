<?php

$dsn="mysql:host=localhost;dbname=invoice;charset=utf8";
$pdo=new PDO($dsn,'root','');


function all($table,...$arg){
    global $pdo;
    $sql="select * from $table ";
            //製作會在 where 後面的句子字串(陣列格式)
if((!empty($arg[0])) && (is_array($arg[0]))){
                foreach($arg[0] as $key => $value){
                    $tmp[]=sprintf("`%s`='%s'",$key,$value);
                    //$tmp[]="`".$key."`='".$value."'";
                }

                $sql=$sql." where ".implode(' && ',$tmp);
        }else{
            //製作非陣列的語句接在$sql後面
                $sql=$sql.$arg[0];
    }
    if(isset($arg[1])){

        $sql=$sql.$arg[1];

    }
    return $pdo->query($sql)->fetchAll(); 

}

echo "<hr>";
print_r(all('invoices'));
echo "<hr>";
print_r(all('invoices',['code'=>"GD",'period'=>6]));
echo "<hr>";
print_r(all('invoices',['code'=>"AB",'period'=>1])," order by date desc");
echo "<hr>";
print_r(all('invoices'," limit 5"));

echo "<hr>";
all('invoices');
echo "<hr>";
all('invoices',['code'=>"GD",'period'=>6]);
echo "<hr>";
all('invoices',['code'=>"AB",'period'=>1]," order by date desc");
echo "<hr>";
all('invoices'," limit 5");
?>