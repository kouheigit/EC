<!DOCTYPE html>
  <head>
     <meta charset="UTF-8">
      <link href="css/main.css" rel="stylesheet">
      <link href="css/mainanime.css" rel="stylesheet">
  </head>
  <!--body始まり-->
  <body id ="index">  
       <nav>
	 <ul class="global-nav">
         <li><a href="main.php" class="btn type02">HOMEへ</a></li>
	 <li><a href="indexshouhin.php" class="btn type02">商品ページ</a></li>
　　　　 <li><a href="indexkettei.php" class="btn type02">購入履歴</a></li>
	 <li><a href="indexcall.php" class="btn type02">お問い合わせ</a></li>
       </nav>
     <!--wrap始まり-->
       <br>
       <br>
       <br> 
    <div id ="wrap">
  <!-- <img src="gazouimg/isu1.jpg"  alt="クランク"  class="lureimage" width="500"  height="450">-->
     <div id="wrap1">
       <div id="css-slider">
	  <div class="slider-wrapper">
	    <div class="slide-item"><img src="gazouimg/isu1.jpg"></div>
	    <div class="slide-item"><img src="gazouimg/rocker.jpg"></div>
	    <div class="slide-item"><img src="gazouimg/tukue.jpg"></div>
     </div>
    </div>
   </div>
　     　<div class="box21">
           <div class="box22">
             <h3>商品一覧</h3>
           </div>
         </div>
 <!--wrap終わり-->
 <!--footerはじまり-->
  <footer class="footer">
   <?php
    require"shouhin.php";
    $shouhin = new shouhin();
    $shouhin->hyouji()
?> 
   </footer>
 <!--footer終わり-->
 </body>  
 <!--body終わり-->
</html>
