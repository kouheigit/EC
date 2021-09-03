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
      <!--下記のimgはPHPで表示する-->
<?php
$gazo = $_POST['gazo'];
//$namae = $_POST['namae'];
echo"<img src=$gazo  width =500 height =500>";
session_start(); $_SESSION['gazo'] = $gazo;
?>
	<h4><?php $namae = $_POST['namae']; echo $namae;
            session_start(); $_SESSION['namae'] = $namae; ?></h4>

	<h5>￥<?php $nedan = $_POST['nedan']; echo $nedan;
               session_start(); $_SESSION['nedan'] = $nedan;?>円</h5>
     <div id ="kosuu">
   <form method="post" action="indexgoukei.php">
       <select name="kosuu">
          <option value="1">1個</option>
          <option value="2">2個</option>
          <option value="3">3個</option>
          <option value="4">4個</option>
	</select>
	<br>
	<br>
   <input type ="submit" value="購入する" class="button1" />
   </form>
   <!--phpで購入ボタンを作る-->
    </div>
    </div>
    </div>
</html>
