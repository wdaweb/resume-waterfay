<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>   <!--不一定會用到-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/1b66a8f9ef.js" crossorigin="anonymous"></script>
    
    <style>
        html body {
            height: 100%;
        }

        .container-fluid{
            padding-right: 0px;
            padding-left: 0px;
        }

    .wave {
    position: relative;
    min-width: 100%;
    height: 100vh;
    background-color:	#374376;
    overflow: hidden;
    }

    .wave::before,.wave::after{
    content: "";
    position: absolute;
    left: 50%;
    bottom: 15%;
    min-width: 160%;
    height: 350%;
    border-radius: 100%;
    background-color: #D3EFFD;
    animation: rotate 8s linear infinite;
    }

    .wave::before {
    bottom: 10%;
    opacity:0.5;
    border-radius: 47%;
    }

    @keyframes rotate {
    from {
    transform: translateX(-50%) rotateZ(0deg);
    }
    to {
    transform: translateX(-50%) rotateZ(360deg);
    }
    }

    h1{
      font-family: 'Indie Flower', cursive;
      left:40%;
      top:10%;
      position:absolute;
      color:	#3A006F;
    }
        table{
            font-family: 'Indie Flower', cursive;
            font-size:25px;
            color:	#3A006F;
            bottom:20%;
            width:400px;
            margin:auto;
            border:0px;
            border-radius:20%;

        }
        table td{
            font-family: 'Indie Flower', cursive;
            font-size:25px;
            border-collapse: collapse; 
            border:0px;
            text-align:center;
            padding:5px 0;
        }
        table td:hover{
            background:lightyellow;
        }
        a{
            top:20%;
            left:50%;
        }

  .bubble{
  position:absolute;
  top:0;
  left:0;
  width:100%;
  height:95%;
  z-index:0;
  overflow:hidden;
  transform:translateZ(0);
}

.bubble li{
  position:absolute;
  list-style:none;
  display:block;
  background:rgba(255,255,255,0.2);
  /*make bubble on page bottom*/
   bottom:-100px; 
  animation:bubble-ani 20s linear infinite;
  border-radius:100%;
}

/* glow of the bubbles*/
.bubble li:before {
    position: absolute;
    left: 20%;
    top: 21%;
    width: 25%;
    content: '';
    background: rgba(255,255,255,0.2);
    display: block;
    height: 25%;
    border-radius: 100%;
}

.bubble li:nth-child(1){
  width:20px;
  height:20px;
  left:15%;
}

.bubble li:nth-child(2){
  width:40px;
  height:40px;
  left:40%;
  animation-duration:13s;
  animation-delay:2s;
}

.bubble li:nth-child(3){
  width:25px;
  height:25px;
  left:30%;
  animation-duration:18s;
  animation-delay:3.5s;
}

.bubble li:nth-child(4){
  width:60px;
  height:60px;
  left:55%;
  animation-duration:23s;
  animation-delay:1.5s;
}

.bubble li:nth-child(5){
  width:20px;
  height:20px;
  left:35%;
  animation-duration:16s;
  animation-delay:2s;
}

@keyframes bubble-ani {
  0%{
    -webkit-transform:translateY(0);
    transform:translateY(0);
  }
  100%{
    -webkit-transform:translateY(-1080px);
    transform:translateY(-1080px);
  }
}
    </style>
</head>
<body>
<?php
if(isset($_GET["m"] )&& isset($_GET["Y"])){
    $month=$_GET["m"];
    $year=$_GET["Y"];
    }else{
        $month=date("m");
        $year=date("Y");
    }

if($month==1)
    {
        $preyear=$year-1;
        $premonth=12;
    }
    else
    {
        $preyear=$year;
        $premonth=$month-1;
    }
    

    if($month==12)
    {
        $nextyear=$year+1;
        $nextmonth=1;
    }
    else
    { 
        $nextyear=$year;
        $nextmonth=$month+1;
    }

date_default_timezone_set("Asia/Taipei");
$firstDate=strtotime("{$year}-{$month}-1");
$starDayWeek=date('w',$firstDate);
$monthDays=date("t",$firstDate);

?>

<ul class="bubble" style="z-index:2;">
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
</ul>

<div class="carousel-control-prev" href="#carouselExampleControls" style="z-index:3;">
<a style="font-size: 5rem;opacity:0.5;margin-left:15px;" href='calenderwork1.php?Y=<?=$preyear?>&m=<?=$premonth?>'>
<i class="fas fa-water"></i>
</a>
</div>
<div class="carousel-control-next" href="#carouselExampleControls" style="z-index:3;">
<a style="font-size: 5rem;opacity:0.5;margin-left:15px;" href='calenderwork1.php?Y=<?=$preyear?>&m=<?=$premonth?>'>
<i class="fas fa-water"></i>
</a>
<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Indie+Flower&display=swap" rel="stylesheet">
</div>

<div class="container-fluid justify-content-center position-relative overflow-hidden" style="z-index:1; border-radi">
<div class="wave">

<div class="container my-5 d-flex justify-content-center align-items-center position-relative" style="width:600px;height: 600px;box-shadow:1px 1px 10px #185761; border-radius:50%;z-index:1;">
<h1 style="z-index:4"><?=$year?>-<?=$month?></h1>
<div class="d-flex justify-content-center align-items-center bg-transparent">





<?php

echo "<table  position='absolute'>";
echo "<td>&emsp;SUN</td>";
echo "<td>&emsp;MON</td>";
echo "<td>&emsp;TUS</th>";
echo "<td>&emsp;WEN</td>";
echo "<td>&emsp;THS</td>";
echo "<td>&emsp;FRI</td>";
echo "<td>&emsp;SAT</td>";
echo "</tr>";


for($i=1-$starDayWeek; $i<=$monthDays;)
        { 
        echo "<tr>";
        for ($j=0; $j<7; $j++)
        { 
            if ($i>$monthDays || $i<1) 
            {
                echo "<td>&nbsp;</td>";
            }
            else
            {
                    echo "<td>".$i."</td>";
                    
            }
            
            $i++;
        }
        echo "</tr>";
    }
echo "</table>";
?>
<div id="carouselExampleControls" class="carousel slide carousel-fade position-absolute" style="border-radius: 100%;" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img\subtle-cinematics-VHt_sWcj70I-unsplash.jpg" style="border-radius: 100%; opacity:0.4;"  class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img\shifaaz-shamoon-O0xQcGATOw4-unsplash.jpg" style="border-radius: 100%; opacity:0.4;"   class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img\johny-goerend-XWWKKdG4Arg-unsplash.jpg" style="border-radius: 100%; opacity:0.4;"   class="d-block w-100" alt="...">
    </div>
  </div>



</div>
</div>
</div>
</body>
</html>