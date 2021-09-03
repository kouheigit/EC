<?php
//require "index.php";もし読み込めない場合はこれで読み込む
//ini_set( 'display_errors', 1 ); 
class member
{
    private $name;//nameはID、間違えて登録,新規登録用プロパティ
    private $mail;//新規登録用プロパティ
    private $password;//新規登録用プロパティ
    public $id;//ログイン用プロパティ
    public $pass;//ログイン用プロパティ

         //login用メソット
         public function login(){

        $mysqli = new mysqli("localhost","root","tfhrt318","EC1");
	$mysqli->autocommit(true);
	$log = $mysqli->query("SELECT * from member where name = '$this->id';");
	$login = mysqli_fetch_array($log);
	

	     if($login[1] == $this->id && $login[3] == $this->pass){
                    
		   echo"ログイン情報が一致しました";
		   //sessionスタート
		   session_start();

		   //sessinの取得
		   $_SESSION['id'] = $this->id;

		     
		      //header("Location: ./main.php");
       echo"<meta http-equiv= Refresh content= 1;URL=./main.php>";

		      
		     
	     }else{

	   echo"ログイン情報が一致しませんでした";
           echo"<meta http-equiv= Refresh content= 2;URL=./index.php>";

		     // header("Location: ./index.php");
     
		     
	          }
		
	 }

        //あたらしい会員登録用のメソット
	public function touroku($name,$mail,$password)
	{
		$this->name = $name;//nameはID、間違えて登録
		$this->mail = $mail;
		$this->password = $password;
		$mysqli = new mysqli("localhost","root","tfhrt318","EC1");
		$mysqli->autocommit(true);
		$kensaku = $mysqli->query("SELECT * from member where mail = '$this->mail';");//そのままでは配列としてデータ出力が不可能

		$data = mysqli_fetch_array($kensaku);//配列として変数に格納する
		//$data[0];データ[0]でid番号を出力
		//変数が入らない
                
		 
		//登録するIDが以前登録したもと同じものかを調べる
		if($data[1]  == $this->name){

			 $this->name = "登録できませんでした、このIDは以前に登録記録が存在します";
			 $this->mail = null;
			 $this->password = null;

			 

		 //登録するメールアドレスが以前登録したものと同じものかを調べる
		}elseif($data[2] == $this->mail) {
                         
			 $this->name = "登録できませんでした、このメールアドレスは以前に登録記録が存在します";
			 $this->mail = null;
                         $this->password = null;

		      

	    }else{

		//情報を顧客登録テーブルに挿入する	
	     $insert = $mysqli->query("INSERT INTO member(name,mail,password) VALUES('$this->name','$this->mail','$this->password');");
 

		//顧客の購入履歴テーブルを作成する
		$create = $mysqli->query("create table $this->name(id int auto_increment, imgname varchar(100),info varchar(100), link varchar(100), kosuu varchar(100), index(id));");
                
	
	               }
	}
    //登録した値を返すためのゲッター(登録用)
        public function gettouroku()
	{
           return array($this->name,$this->mail,$this->password);
	}
	
}/*
$member = new member();

// 会員名を設定
$member->touroku("egawatarou","egawa@gmail.com","egawa");

// 会員名を取得
$memberName = $member->gettouroku();

//会員名を配列として取得する
echo $memberName[0];
echo"<BR>";
echo $memberName[1];
echo"<BR>";
echo $memberName[2];
 */


?>

