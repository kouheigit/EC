<html>
  <head>
    <link href="css/indexkettei.css" rel="stylesheet">
  </head>
  <body>
  <a href="main.php">← 戻る</a>
  <?php
    require"kettei.php";
    session_start();
    $id1 = $_SESSION['id'];
    $kettei = new kettei();
    $kettei->id1 = $id1;
    $kettei->rireki();
  ?>
  <body>
</html>
