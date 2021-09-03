<!DOCTYPE html>
  <head>
    <meta charset="UTF-8">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/style.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet"> 
    <title>
       ログインページ
    </title> 
  </head>
  <body id ="index">
  <!--index(body)始まり--> 
<!--header始まり-->
    <header>
    <!-- <div class = "logo">-->
        <!--ここは不要 <a href="index.html"><img src ="gazouimg/log.jpeg"alt="SNAPPERS"></a>--!>
     </div>
       <!-- <nav>
	 <ul class="global-nav">
           <li>テスト</li>
           <li>テスト2</li>
	   <li>テスト3</li>
	 </ul>
       </nav>-->
    </header>
<!--header終わり-->

<!--wrap始まり-->
      <div id = "wrap">
<!--文字コンテンツを表示させている-->
      <div class="content">
        <h1 id ="title">Good office</h1>
	 <p class id =bun>会員限定のオフィス家具の総合通販サイト、オフィスデスクからオフィスチェアなどのからデスク周辺用品、<BR> スチールラック、受付カウンターなどの商品まで幅広く取り揃えております。</p>
           <div class="popupModal1">
              <input type="radio" name="modalPop" id="pop11" />
	          <label for="pop11"><a class="cp_btn">ログインする</a> </label>
                    <input type="radio" name="modalPop" id="pop12" />
                       <label for="pop12">CLOSE</label>
                         <input type="radio" name="modalPop" id="pop13" />
                       <label for="pop13">×</label>
                     <div class="modalPopup2">
                   <div class="modalPopup3">
              <h2 class="modalTitle">Goodoffice会員ログイン</h2>
            <div class="modalMain">
           <form method="post" action="index2.php">
               会員ID<br>
              <input type="id" input input placeholder='会員IDをお願いします'input required name="id" size="30"required><br>
               会員パスワード<br>
              <input type="pass" input input placeholder='パスワードをお願いします'input required name="pass" size="30"required><br>
               <br> 
              <input type="submit" value="ログインする"/>
	  </form>
            <a href="touroku.php">会員登録してない方はこちらへ</a>
          </div>
         </div>
         </div>        
        </div>
      </div>

<!--

       require"member.php";

      $id = $_POST['id'];
      $pass = $_POST['pass'];
      $member = new member();
      $member->id = $id;
      $member->pass = $pass;
      $member->login()

-->
<!--wrap終わり-->   
<!--index(body)終わり-->
   </body>
  </html>
