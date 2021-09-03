<?php
/*
session_start();

$syamu = $_SESSION['id'];
echo $syamu;
 */
class show{

public $test;

       public function show1()
       {
	       if(isset($this->test)){

		       echo"変数が存在する";
	       }else{
		       
		       echo"変数が存在しません";
               }
       }
}

$show = new show();
$show->test = 100;
$show->show1();

?>
