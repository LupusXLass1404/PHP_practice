<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="questions">
    <h3>威力彩電腦選號沒有重覆號碼(利用while迴圈)</h3> 
    <ul>
        <li>使用亂數函式rand($a,$b)來產生號碼</li>
        <li>將產生的號碼順序存入陣列中</li>
        <li>每次存入陣列中時會先檢查陣列中的資料有沒有重覆</li>
        <li>完成選號後將陣列內容印出</li>
    </ul>
</div>

<?php

$array = [];
// count($array)
while (count($array) < 6) {
    $lottery = rand(1, 38);

    if(!in_array($lottery, $array))$array[] = $lottery;

    // if (count($array) == 0){
    //     $array[] = $lottery;
    // }

    // foreach ($array as $index => $n){
    //     if ($n == $lottery) {
    //         break;
    //     }

    //     if (count($array)-1 == $index){
    //         $array[] = $lottery;
    //     }
    // }

    sort($array); //重新排序陣列
}

echo "威力彩號碼: ";
foreach ($array as $index => $n){
    echo "$n, ";
}
echo "<hr>";
echo "威力彩號碼: ";
echo join(", ", $array); // 輸出陣列


print('<pre>');
print_r($array);
print('</pre>');
?>
    
</body>
</html>