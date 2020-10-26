<style>
table{
    border-collapse:collapse;
}
td{
    border:1px solid #999;
    width:20px;
    padding:5px 10px;
}
tr:nth-child(1){
    background:	#D0D0D0;
    }
td:first-child{
    background:	#D0D0D0;
}
td:hover{
    background:pink;
}

</style>


<table style="text-align:center">
<h1>for九九乘法</h1>

<?php
for($i=0;$i<10;$i++){
    echo"<tr>";
    for($j=0;$j<10;$j++){
        if($i==0 && $j==0){
            echo"<td></td>";
        }else if($j==0){
                echo"<td>$i</td>";
            }else if($i==0){
                echo"<td>$j</td>";
            }else{
        echo"<td>".$i*$j."</td>";
    }
    }
}
?>
</table>