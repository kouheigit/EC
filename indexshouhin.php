<!DOCTYPE html>
  <head>
     <meta charset="UTF-8">
      <link href="css/main.css" rel="stylesheet">
      <link href="css/mainanime.css" rel="stylesheet">
      <link href="css/indexshouhin.css" rel="stylesheet">
      <!--ドロワーjsに対するリンク-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/css/drawer.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/js/drawer.min.js"></script>
  </head>

  <!--body始まり-->
<body id ="index">
 <body class ="drawer drawer--left">
  <header role="banner">
    <!-- ハンバーガーボタン -->
    <button type="button" class="drawer-toggle drawer-hamburger">
      <span class="sr-only">toggle navigation</span>
      <span class="drawer-hamburger-icon"></span>
    </button>
    <!-- ナビゲーションの中身 -->
    <nav class="drawer-nav" role="navigation">
      <ul class="drawer-menu">

	<li>
	  <a class="drawer-brand" href="#">メニュー</a>
       </li>
       <li>
	    <form method="post" name="form_1" action="indexshouhin.php">
　　　　    <input type="hidden" name="kensaku" value="チェア">
	    <a class="drawer-menu-item" href="javascript:form_1.submit()">オフィスチェア</a>
           </form>
       </li>
       <li>     
           <form method="post" name="form_2" action="indexshouhin.php">
　  　　 　<input type="hidden" name="kensaku" value="デスク">
	   <a class="drawer-menu-item" href="javascript:form_2.submit()">デスク</a></form> 
	</li>
        <li>
           <form method="post" name="form_3" action="indexshouhin.php">
　　　　 　<input type="hidden" name="kensaku" value="ロッカー">
           <a class="drawer-menu-item" href="javascript:form_3.submit()">ロッカー</a></form> 
	</li>
　　　  <li>
           <form method="post" name="form_4" action="indexshouhin.php">
　　　　 　<input type="hidden" name="kensaku" value="金庫">
           <a class="drawer-menu-item" href="javascript:form_4.submit()">防火用金庫</a></form>
        </li>
  　　　<li>
           <form method="post" name="form_5" action="indexshouhin.php">
　　　　 　<input type="hidden" name="kensaku" value="応接">
           <a class="drawer-menu-item" href="javascript:form_5.submit()">応接用品</a></form>
	</li>
        <li>
           <form method="post" name="form_6" action="indexshouhin.php">
　　　　 　<input type="hidden" name="kensaku" value="コピー">
           <a class="drawer-menu-item" href="javascript:form_6.submit()">コピー機</a></form>
	</li>
         <li>
           <form method="post" name="form_7" action="indexshouhin.php">
　　　　 　<input type="hidden" name="kensaku" value="フォン">
           <a class="drawer-menu-item" href="javascript:form_7.submit()">ビジネスフォン</a></form>
	</li>
         <li>
           <form method="post" name="form_8" action="indexshouhin.php">
　　　　 　<input type="hidden" name="kensaku" value="雑貨">
           <a class="drawer-menu-item" href="javascript:form_8.submit()">オフィスインテリア</a></form>
	</li>
          <li>
           <form method="post" name="form_9" action="indexshouhin.php">
　　　　 　<input type="hidden" name="kensaku" value="パーティーション">
           <a class="drawer-menu-item" href="javascript:form_9.submit()">パーティーション</a></form>
        </li>
      </ul>
    </nav>
  </header>
      <main role="main">
      </main>
       <!-- ドロワーメニューの利用宣言 -->
  <script>
    $(document).ready(function() {
    $('.drawer').drawer();
  });
  </script>
    <div id ="searchposition">
      <form method="post" id="searchform"  action="indexshouhin.php">
        <input type="text" id="search" input placeholder='検索キーワード'input name="kensaku">
        <input type="submit" value="検索" />
     </form>
   </div>
 <!--    <form method="POST" id="searchform" action="indexshouhin.php">
       <input type="text" id="search"  name="kensaku"/>
       <input type="submit" value="送信"/>-->
    </form>
      <nav>
	 <ul class="global-nav">
         <li><a href="main.php" class="btn type02">HOMEへ</a></li>
	 <li><a href="indexshouhin.php" class="btn type02">商品ページ</a></li>
　　　　 <li><a href="indexkettei.php" class="btn type02">購入履歴</a></li>
	 <li><a href="indexcall.php" class="btn type02">お問い合わせ</a></li>
       </nav>
       <br>
       <br>
       <br>
     <!--wrap始まり-->
   <div id ="wrap">
     <h1>商品ページ</h1>
       <?php
       echo"<div id = phppotision>";
       require"shouhinpage.php";
       if(empty($_POST['kensaku'])){
	       echo"";
       }else{
       $kensaku = $_POST['kensaku'];
       $shouhinpage = new shouhinpage();
       $shouhinpage->kensaku = $kensaku;
       $shouhinpage->pagehyouji();
       }
       echo"</div>";
?>
   </div>



   <!--
     <img src="gazouimg/isu1.jpg"  alt="クランク"  class="lureimage" width="500"  height="450">
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
-->
</div>
  <footer>
  </footer>
 </body>
</body>  
</html>
