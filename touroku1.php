<?php

require"member.php";
$name = $_POST['name'];
$mail = $_POST['mail'];
$password = $_POST['password'];

$member = new member();

// 会員名を設定
$member->touroku($name,$mail,$password);

// 会員名を取得
$memberName = $member->gettouroku();

//会員名を配列として取得する
echo $memberName[0];
echo"<BR>";
echo $memberName[1];
echo"<BR>";
echo $memberName[2];


?>
