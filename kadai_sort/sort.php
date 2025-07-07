<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <p>
    <?php
    
    function sort_2way(array &$array, bool $order): void {
    if ($order === true) {
        sort($array); 
    } else {
        rsort($array); 
    }
    }

$numbers = [15, 4, 18, 23, 10];

// 昇順ソート
    sort_2way($numbers, true);
    echo '昇順にソートします。<br>';
    foreach ($numbers as $num) {
    echo "$num<br>";
    }
// 降順ソート
    sort_2way($numbers, false);
    echo '降順にソートします。<br>';
    foreach ($numbers as $num) {
    echo "$num<br>";
    }
    ?>
    </p>
</body>

</html>