<!DOCTYPE html>
    <head>
       <meta charset="utf-8">
    </head>
    <body>
　　  <form action="test5.php" method="post">
	<input type="image" src="shouhinpage/isu1.jpg" width="200" hight="200">
　　　  <input type="hidden" name="syamu" value="12345">
       <?php
        $syamu = $_POST['syamu'];
        echo $syamu;
        ?>
      </form>
    </body>
</html>

