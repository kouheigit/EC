<!DOCTYPE html>
 <head>
   <meta charset="UTF-8">
   <link href="css/touroku.css" rel="stylesheet">
 </head>
   <body>
         <div id="form-main">
  <div id="form-div">
  <form method="post" action="touroku1.php"><!--追加した-->
    <form class="form" id="form1">

      <p class="name">
        <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="ID" id="name"required />
      </p>

      <p class="email">
        <input name="mail" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="mail"required />
      </p>

      <p class="password">
        <input name="password" type="password" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="password"required></textarea>
      </p>
      <div class="submit">
	<input type="submit" value="登録する" id="button-blue"/>
     </form>
        <div class="ease"></div>
      </div>
    </form> 
  </div>
   </body>
</html>

