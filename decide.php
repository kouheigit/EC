<?php
require"kettei.php";
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
?>

