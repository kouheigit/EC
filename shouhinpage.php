<!DOCTYPE html>
  <head>
    <meta charset="UTF-8">
    <link href="css/shouhinmain.css" rel="stylesheet">
  </head>
  <body>
<?php
require"shouhin.php";
class shouhinpage extends shouhin { 
public $temp;
public $name;//imgタグに入れる情報
public $info;//表示する商品名情報
public $kensaku;//検索のためのプロパティ
    public function pageupload()
    {

         if(is_uploaded_file($this->temp)){
         if(move_uploaded_file($this->temp, $this->name )){

                 $mysqli = new mysqli("localhost","root","tfhrt318","EC1");
                 $mysqli->autocommit(true);
                 $mysqlimg = $mysqli->query("INSERT INTO shouhinpage(imgname,info) VALUE('$this->name','$this->info');");
                 echo $this->name . "をアップロードしました";
                 echo"<img src=$this->name width = 400 height = 300>";
                 echo $this->info;
          }else{
                  // echo"ファイルをアップロード出来ません。";
          }

          }else{
                  // echo"ファイルが選択されてません";
          }
    }

    public function pagehyouji()
    {
	    $mysqli = new mysqli("localhost","root","tfhrt318","EC1");
	    $mysqli->autocommit(true);
	 
	    $res = $mysqli->query("select * from shouhinpage where info like '%$this->kensaku%';");
         while($data = mysqli_fetch_array($res)){
              //   echo"<div class= sample_box8>";      　
               echo"<figure class = gazo-box>";
	       echo"<div class= normal-box4>";
	       echo"<form action=indexkounyu.php method=post>";
              // echo"<input type=image src=$data[1] width=200 hight=200>";
	       echo"<input type=image src=$data[1] width=200  height=200>";
	       echo"<input type=hidden name=gazo value=$data[1]>";
	       echo"<input type=hidden name=namae value=$data[2]>";
	       echo"<input type=hidden name=nedan value=$data[3]>";
               echo"</TD>";
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
/*pagehyoujiメソットを使用する時は↓下の奴は消す

$shouhinpage = new shouhinpage();
$info = $_POST['info'];
$shouhinpage->temp = $_FILES['fname']['tmp_name'];
$shouhinpage->name = "shouhinpage/" .$_FILES['fname']['name'];
$shouhinpage->info = $info; // $_FILES['fname']['name'];
$shouhinpage->pageupload()
*/
 

?>
 
<!-- <form action="shouhinpage.php" method="post" enctype="multipart/form-data">
　　　 見出し名<input type="text" name="info">
       <input type="file" name="fname">
       <input type="submit" value="アップロード">
     </form>
  </body>
  </html>-->
