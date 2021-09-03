<!DOCTYPE html>
   <head>
    <link href="css/shouhinmain.css" rel="stylesheet">
     <meta charset="UTF-8">
   </head>
   <body>
<!--  <div id ="box1">-->
<?php
class shouhin{ /*商品画像をアップロードをするメソット*/

public $shouhintemp;
public $shouhinname;//imgタグに入れる情報
public $shouhininfo;//表示する商品名情報

    public function upload()
    { 
	    
	 if(is_uploaded_file($this->shouhintemp)){
	 if(move_uploaded_file($this->shouhintemp, $this->shouhinname )){
                 
		 $mysqli = new mysqli("localhost","root","tfhrt318","EC1");
		 $mysqli->autocommit(true);
		 $mysqlimg = $mysqli->query("INSERT INTO mainshouhin(imgname,info) VALUE('$this->shouhinname','$this->shouhininfo');");
		 echo $this->shouhinname . "をアップロードしました";
		 echo"<img src=$this->shouhinname width = 400 height = 300>";
		 echo $this->shouhininfo;
	  }else{
		  // echo"ファイルをアップロード出来ません。";
	  }

	  }else{
		  // echo"ファイルが選択されてません";
          }
    }
  
      public function hyouji()
      {
	$mysqli = new mysqli("localhost","root","tfhrt318","EC1");
	$mysqli->autocommit(true);
	$res = $mysqli->query("SELECT * from mainshouhin;"); 
           // echo"<div id = box1>";
	while($data = mysqli_fetch_array($res)){
	      //   echo"<div class= sample_box8>";	　
	       echo"<figure class = gazo-box>";
	       echo"<div class= normal-box4>"; 
	       echo"<form action=indexshouhin.php method=post>";  
	       echo"<input type=image src=$data[1] width=200 hight=200>";
               echo" <input type=hidden name=kensaku value=$data[3]>";
	       // echo"<img src= $data[1]    width= 200  height= 200 >";
	       echo"<figcaption>".$data[2];
	       echo"</figcaption>";
	       echo"</figure>";
	       echo"</form>";
	//         echo"</div>";
	       echo"</TD>";
	       echo"</TR>";
	       
            }
	     echo"</TABLE>";
	    // echo"</div>";
               echo"</div>";
      } 
  
}
//formを受け取るためのPHP
/*
$info = $_POST['info']; 
$shouhin = new shouhin();
$shouhin->shouhintemp = $_FILES['fname']['tmp_name'];
$shouhin->shouhinname = "shouhinimg/" .$_FILES['fname']['name'];
$shouhin->shouhininfo = $info; // $_FILES['fname']['name'];
$shouhin->upload()
 */
?>


<!--      <form action="shouhin.php" method="post" enctype="multipart/form-data">
　　　 見出し名<input type="text" name="info">
       <input type="file" name="fname">
       <input type="submit" value="アップロード">
     </form>-->
  </body>
</html>
  
