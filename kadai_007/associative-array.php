<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    //連想配列に値を代入する
    $goods_date = ['name' => 'onion', 'price' => 200, 'weight' => 160];

    //連想配列の値を出力する
    print_r($goods_date);
    ?>
  </p>
</body>

</html>