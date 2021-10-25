<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $x1 = htmlspecialchars($_POST['x1'], ENT_QUOTES);
    $y1 = htmlspecialchars($_POST['y1'], ENT_QUOTES);
    
    $x2 = $x1;
    $y2 = $y1;


    
  }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="x1" value="">x1<br>
    <input type="text" name="y2" value="">y1<br>
    <input type="submit" name="" value="計算">
  </form>
</body>
</html>