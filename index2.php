<?php
       require"member.php";

      $id = $_POST['id'];
      $pass = $_POST['pass'];
      $member = new member();
      $member->id = $id;
      $member->pass = $pass;
      $member->login()

?>
