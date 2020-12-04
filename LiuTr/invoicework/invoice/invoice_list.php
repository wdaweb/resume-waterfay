<?php
include_once "base.php";
ini_set('display_errors','off'); 
$period=ceil(date("m")/2);

// $sql="select * from `invoices` where period='$period' order by date desc";

// $rows=$pdo->query($sql)->fetchAll();

// $m=ceil(date("m")/2);
// if(isset($_GET['pd'])){
//     $year=date('Y');
//     $period=$m;
//     $sql="select * from `invoices` where period='$period' order by date desc";
// }else{
//     $get_news=$pdo->query("SELECT * FROM `award_numbers` order by year desc ,period desc limit 1")->fetch();
//     $year=$get_news['year'];
//     $period=$get_news['period'];
//     }
//     if(isset($_GET['pd1'])){
//         $year=date('Y');
//         $period=$m-1;
//         $sql="select * from `invoices` where period='$period' order by date desc";
//         $rows=$pdo->query($sql)->fetchAll();
//     }
//     if(isset($_GET['pd2'])){
//         $year=date('Y');
//         $period=$m-2;
//         $sql="select * from `invoices` where period='$period' order by date desc";
//         $rows=$pdo->query($sql)->fetchAll();
//     }
?>
<form action="?do=invoice_list" method="post">
<input type="text" name="ivname"><input type="text" name="keyword"><input type="submit" name="submit">
</form>
<?php
$keyword=$_POST['keyword'];
$ivname=$_POST['ivname'];
// $count=ceil(COUNT($rows)/5);
if(((!empty($_POST['ivname']) || !empty($_POST['keyword'])) && empty($_GET['page']))){
    $sql="SELECT * FROM `invoices` WHERE `code` LIKE '%{$ivname}%' && `number` LIKE '%{$keyword}%' ";
    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}



// for($i=0;$i<$count;$i++){
//     }
 
    

// 
// echo COUNT($rows);
// if(!empty($_GET['nextpag'])){
//     $nextpage=$nextpage+5;
// }else if(!empty($_GET['perpag']) && $prepage==0)
// echo "搜尋數量:". COUNT(*);
?>
<!-- <div class='row justify-content-around' style="list-style-type:none;paddin:0">
    <li><a href="?do=invoice_list&pd2=<?=$year?>-<?=$period?>">上上期發票</a></li>
    <li><a href="?do=invoice_list&pd1=<?=$year?>-<?=$period?>">上期發票</a></li>
    <li><a href="?do=invoice_list&pd=<?=$year?>-<?=$period?>">當期發票</a></li>
</div> -->


<table class="table text-center">
    <tr>
        <td>發票號碼</td>
        <td>消費日期</td>
        <td>消費金額</td>
        <td>操作</td>
    </tr>
    <?php
    foreach($rows as $row){
    ?>
    <tr>
        <td><?=$row['code'].$row['number'];?></td>
        <td><?=$row['date'];?></td>
        <td><?=$row['payment'];?></td>
        <td>
            <button class="btn btn-sm btn-primary">
                <a class="text-light" href="?do=edit_invoice&id=<?=$row['id'];?>">編輯</a>
            </button>
            <button class="btn btn-sm btn-danger">
            <a class="text-light" href="?do=del_invoice&id=<?=$row['id'];?>">刪除</a>
            </button>
            <button class="btn btn-sm btn-success">
            <a class="text-light" href="?do=award&id=<?=$row['id'];?>">對獎</a>
            </button>
        </td>
    </tr>
    <?php
              }


    ?>
</table>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="?do=invoice_list&page=<?=$pagestart?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    <li class="page-item">
      <a class="page-link" href="?do=invoice_list&page=<?=$pagesize?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>