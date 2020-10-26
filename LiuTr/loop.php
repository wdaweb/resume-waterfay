<style>
table{
    border-collapse:collapse;
}
td{
    border:1px solid #999;
    width:20px;
    padding:5px 10px;
}
</style>

<h2>迴圈結構</h2>
<table>
<?php
    for($j=0;$j<9;$j++){
        echo "<tr></tr>";
    
    for($i=0;$i<9;$i++){
        echo "<td>".($i+1)."x".($j+1)."=" .($i+1)*($j+1)."</td>";
    }
}
        
?>        

</table>
