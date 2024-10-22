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

<div class="questions">
<h3>已知西元1024年為甲子年，請設計一支程式，可以接受任一西元年份，輸出對應的天干地支的年別。(利用迴圈)</h3> 
    <ul>
        <li>天干：甲乙丙丁戊己庚辛壬癸</li>
        <li>地支：子丑寅卯辰巳午未申酉戌亥</li>
        <li>天干地支配對：甲子、乙丑、丙寅….甲戌、乙亥、丙子…</li>
    </ul>
</div>
<!-- AD Anno Domini CT sexagenary cycle-->

<?php
    $year= 2034;
    $Celestial = ['甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸'];
    $Terrestrial = ['子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥'];
    
    echo "西元$year" . $Celestial[($year+6)%10] . $Terrestrial[($year+8)%12];
?>

<table>
<?php
for($i=0; $i<6; $i++){
    echo "</tr>";
    for($j=0; $j<10; $j++){
        $cellnum=10*$i+$j;
        $landIndex=$cellnum%12;

        echo "<td>";
        echo $Celestial[$j] . $Terrestrial[$landIndex];
        echo "</td>";
    }
    echo "</tr>";
}
?>
</table>

<?php
    $sl=[];
    for($i=0; $i<6; $i++){
        
        for($j=0; $j<10; $j++){
            $cellnum=10*$i+$j;
            $landIndex=$cellnum%12;

            $sl[]= $Celestial[$j] . $Terrestrial[$landIndex];
        }
    }
    echo $sl[($year-4)%60]
?>

<div class="questions">
    <h3>請設計一支程式，在不產生新陣列的狀況下，將一個陣列的元素順序反轉(利用迴圈)</h3> 
    <ul>
        <li>例：$a=[2,4,6,1,8] 反轉後 $a=[8,1,6,4,2]</li>
    </ul>
</div>
    
<?php
    $nums = [2,4,6,1,8];
    // $nums = [1,2,3,4,5];
    // $nums = [1,2,3,4,5,6];

    foreach($nums as $index => $n){
        if($index < floor(count($nums)/2)) break;

        $first = $n;
        $nums[$index] = $nums[count($nums)-1-$index];
        $nums[count($nums)-1-$index]= $first;

        echo "<br>b";
    }

    print('<pre>');
    print_r($nums);
    print('</pre>');

?>

</body>
</html>