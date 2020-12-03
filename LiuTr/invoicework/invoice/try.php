$wherelist=array();
$urlist=array();
if(!empty($_GET['title']))
{
$wherelist[]=" title like '%".$_GET['title']."%'";
$urllist[]="title=".$_GET['title'];
  
}
if(!empty($_GET['keywords']))
{
$wherelist[]=" keywords like '%".$_GET['keywords']."%'";
$urllist[]="keywords=".$_GET['keywords'];
}if(!empty($_GET['author']))
{
$wherelist[]=" author like '%".$_GET['author']."%'";
$urllist[]="author=".$_GET['author'];
}
$where="";
if(count($wherelist)>0)
{
$where=" where ".implode(' and ',$wherelist);
$url='&'.implode('&',$urllist);
}
//分頁的實現原理
//1.獲取資料表中總記錄數
$sql="select count(*) from news $where ";
$result=mysql_query($sql);
$totalnum=mysql_num_rows($result);
//每頁顯示條數
$pagesize=5;
//總共有幾頁
$maxpage=ceil($totalnum/$pagesize);
$page=isset($_GET['page'])?$_GET['page']:1;
if($page <1)
{
$page=1;
}
if($page>$maxpage)
{
$page=$maxpage;
}
$limit=" limit ".($page-1)*$pagesize.",$pagesize";
$sql1="select * from news {$where} {$limit}";
  
//$sql1="select * from news {$where} {$limit}";
$res=mysql_query($sql1);
  
?>
<form action="searchpage.php" method="get">
標題：<input type="text" name="title" value="<?php echo $_GET['title']?>" size="8">
關鍵字<input type="text" name="keywords" value="<?php echo $_GET['keywords']?>" size="8">
作者：<input type="text" name="author" value="<?php echo $_GET['author']?>" size="8">
 <input type="button" value="檢視全部" onclick="window.location='searchpage.php'">
 <input type="submit" value="搜尋">
</form>
  
<table border="1" width="1000" align="center">
 <tr>
 <td>編號</td>
 <td>標題</td>
 <td>關鍵字</td>
 <td>作者</td>
 <td>日期</td>
 <td>內容</td>
 </tr>
<?php while($row= mysql_fetch_assoc($res)){?>
<tr>
 <td><?php echo $row['id'] ?></td>
 <td><?php echo $row['title'] ?></td>
 <td><?php echo $row['keywords'] ?></td>
 <td><?php echo $row['author'] ?></td>
 <td><?php echo date("Y-m-d H:i:s",$row['addtime']) ?></td>
 <td><?php echo $row['content'] ?></td>
 </tr>
<?php }?>
<tr>
 <td colspan="6">
<?php
 echo " 當前{$page}/{$maxpage}頁 共{$totalnum}條";
echo " <a href='searchpage.php?page=1{$url}'>首頁</a> ";
echo "<a href='searchpage.php?page=".($page-1)."{$url}'>上一頁</a>";
echo "<a href='searchpage.php?page=".($page+1)."{$url}'>下一頁</a>";
echo " <a href='searchpage.php?page={$maxpage}{$url}'>尾頁</a> ";
  
?>
</td>
 </tr>
</table>