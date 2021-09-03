<!DOCTYPE html>
  <head>
  </head>
  <body>

<?php

class kettei{
public $name;//名前
public $mail;//メールはmysqlのmemberテーブルからとってくる
public $add;//住所
public $gazo;//商品画像 = mysqlにいれる
public $namae;//商品名　= mysqlにいれる
public $nedan;//値段　　= mysqlにいれる
public $kosuu;//購入個数 = mysqlにいれる
public $sum;//合計金額　 = mysqlにいれる
public $id1;//indexketteiのid情報
  public function logid()//戻り値形式にする
  { 
	  $mysqli = new mysqli("localhost","root","tfhrt318","EC1");
	  $mysqli->autocommit(true);
	  $log = $mysqli->query("SELECT * from member where name = '$this->mail';");
	  $login = mysqli_fetch_array($log);

	  $mysqli->query("INSERT INTO $login[1](imgname,info,link,kosuu) VALUE('$this->gazo','$this->namae','$this->nedan','$this->kosuu');");
	 // echo $this->gazo;//mysql→ imgname
	  echo"<BR>";
	  echo $this->name;
	  echo"<BR>";
	  echo $login[2];
	  echo"<BR>";
	  echo $this->add;
	  echo"<meta http-equiv= Refresh content= 3;URL=./main.php>";

	 // echo"<BR>";
	 // echo $this->namae;//mysql→ info
	 // echo"<BR>";
	 // echo $this->kosuu;//mysql→ kosuu
	 // echo"<BR>";
	 // echo $this->nedan;//mysql→ link

  }
  
   public function rireki()
   {
	 session_start();
         $mysqli = new mysqli("localhost","root","tfhrt318","EC1");
	 $mysqli->autocommit(true);
	 // $res =$mysqli->query("SELECT * from $this->id1;");
	 // SELECT * FROM users ORDER BY id DESC;
	// SELECT * FROM users ORDER BY id DESC;
	$res =$mysqli->query("SELECT * FROM $this->id1 ORDER BY id DESC;");
	     echo"<table>";
	     echo"<tr>";
	     echo"<th>";
	     echo"</th>";
	     echo"<th>商品名";
	     echo"</th>";
	     echo"<th>値段";
	     echo"</th>";
             echo"<th>個数";
	     echo"</th>";
	     echo"</tr>";
	   while($data = mysqli_fetch_array($res)){
             echo"<tr>";		     
	     echo"<td class=icon bird>";
	     echo"<img src=$data[1] width=100 height=100>";
	     echo"</td>";
	     echo"<td>".$data[2];
             echo"</td>";
	     echo"<td>".$data[3];
             echo"円</td>";
	     echo"<td>".$data[4];
	     echo"</td>";
	     echo"</tr>";
      }
	     echo"</table>";
	     echo"</div>";
    }
}

/*
session_start();
$kettei = new kettei();
$gazo = $_SESSION['gazo'];
$mail = $_SESSION['id'];
$name = $_POST['name1'];
$add = $_POST['add1'];
$namae = $_SESSION['namae'];
$kosuu = $_SESSION['kosuu'];
$nedan = $_SESSION['nedan'];

$kettei->gazo = $gazo;
$kettei->name =$name;
$kettei->mail = $mail;
$kettei->add = $add;
$kettei->namae = $namae;
$kettei->kosuu = $kosuu;
$kettei->nedan = $nedan;
$kettei->logid();
*/
  
?>
  </body>
</html>
