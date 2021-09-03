<?php
  
   session_start();
   $name = $_SESSION['id'];
   echo $name;
 
   $var1;
if (isset($var1)){
   echo"存在する";
}else{
   echo"存在しない";
}

?>
