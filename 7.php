<?php
//require "index.php";もし読み込めない場合はこれで読み込む
ini_set( 'display_errors', 1 ); 
class member
{
    private $name;
    private $mail;
    private $password;
    
	public function touroku($name,$mail,$password)
	{
		$this->name = $name;
		$this->mail = $mail;
		$this->password = $password;
		$mysqli = new mysqli("localhost","root","tfhrt318","EC1");
		$mysqli->autocommit(true);
		$kensaku = $mysqli->query("SELECT * from member where mail = '$this->mail';");//そのままでは配列としてデータ出力が不可能


		$data = mysqli_fetch_array($kensaku);//配列として変数に格納する
	         if($data[2] == $this->mail){

			echo"このメールアドレスでは登録できません。以前に登録記録のあるメールアドレスです";

                  }else{
			
		$insert = $mysqli->query("INSERT INTO member(name,mail,password) VALUES('$this->name','$this->mail','$this->password');");
			
//顧客のテーブルを作成する
		$create = $mysqli->query("create table $this->name(id int auto_increment, shouhin varchar(100), index(id));");

	
	               }
	}
        public function gettouroku()
	{
           return array($this->name,$this->mail,$this->password);
	}
	
}
//
$member = new member();

// 会員名を設定
$member->touroku("橋本信二","shinzihasimoto@gmail.com","shinzi");

// 会員名を取得
$productName = $member->gettouroku();

//会員名を配列として取得する
echo $productName[0];
echo"<BR>";
echo $productName[1];
echo"<BR>";
echo $productName[2];





?>

