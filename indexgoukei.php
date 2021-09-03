<!DOCTYPE html> 
   <head>
     <meta charset="UTF-8">
     <link href="css/main.css" rel="stylesheet">
     <!-- <link href="css/mainanime.css" rel="stylesheet">-->
      <link href="css/indexshouhin.css" rel="stylesheet">
  </head>
  <!--body始まり-->
  <body id ="index">
       <nav>
         <ul class="global-nav">
         <li><a href="main.php" class="btn type02">HOMEへ</a></li>
         <li><a href="indexshouhin.php" class="btn type02">商品
ページ</a></li>
　　　　 <li><a href="indexkettei.php" class="btn type02">購入履歴</a></li>
         <li><a href="indexcall.php" class="btn type02">お問い合わせ</a></li>
       </nav>
     <!--wrap始まり-->
       <br>
       <br>
       <br>
    <div id ="wrap">
     <h1>購入ページ</h1>
      <div id ="kounyuid">
    　<?php session_start(); $gazo = $_SESSION['gazo'];?>
      <?php echo"<img src =$gazo  width =350 height =350>";?>
　<!-- <form method="post" action="kettei.php" class="textbox">
	<input type ="text" input placeholder='名前' input  name="name1" class="texteffect">
	<br>
	<input type ="text" input placeholder='メール' input  name="mail1" class="texteffect">
        <br>
	<input type ="text" input placeholder='住所' input  name="add1" class="texteffect">
        <br>
        <input type ="submit">
   </form>  -->
      <p class ="namae">商品名:<?php echo $_SESSION['namae'];?></p>
      <p class ="nedan">¥<?php  echo $_SESSION['nedan'];?>円</p>
      <?php $syamu = $_POST['kosuu']; $_SESSION['kosuu'] = $syamu;?>
     <p class ="kosuu">購入個数 <?php echo $syamu; ?>個</p>
     <p class ="sum">合計金額<?php $num = (int)$_SESSION['nedan']; echo $sum = $num*$syamu; $_SESSION['sum'] = $sum;?>円</p>

    </div> 
  </div>
  　 <form method="post" action="decide.php" class="textbox">
        <input type ="text" input placeholder='名前' input  name="name1" class="texteffect" required>
        <br>
       <!-- <input type ="text" input placeholder='メール' input  name="mail1" class="texteffect">
        <br>-->
        <input type ="text" input placeholder='住所' input  name="add1" class="texteffect" required>
        <br>
        <input type ="submit"class="submitbox">
   </form>  
</html>
    
