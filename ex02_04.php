<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $kazu = htmlspecialchars($_POST['kazu'], ENT_QUOTES);
    $kekka = htmlspecialchars($_POST['kekka'], ENT_QUOTES);
    
    if ($kazu >= 10)
    {
      $kekka = $kazu;
    }
    else if ($kazu < 10) 
    {
      $kekka = $kazu * 2;
      if($kekka < 10) 
      {
        $kekka = $kazu * 4;
      }
    }
    echo $kekka;
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
    <input type="text" name="kazu" value="">数<br>
    <!-- <input type="text" name="" value="">shisu<br> -->
    <input type="submit" name="" value="計算">
  </form>
</body>
</html>