<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>給定兩個日期，計算中間間隔天數</h2>
    <?php
        // $data_1 = "2023-09-23";
        // $data_2 = "2023-09-20";
        // $data_time = strtotime($data_1) - strtotime($data_2);
        // echo date("Y, y, m, n, d, j, H, h, i, s,", $data_time);
        date_default_timezone_set("Asia/Taipei");

        echo date("Y/m/d H:i:s");
        echo "<br>";

        $start = "2024-10-01";
        $end = "2024-10-30";

        $startTime = strtotime($start);
        echo '開始時間：'.$startTime;
        echo "<br>";

        $endTime = strtotime($end);
        echo '結束時間：'.$endTime;
        echo "<br>";

        $gap = $endTime - $startTime;
        echo '差距秒數：' . $gap;
        echo "<br>";

        // $days = $gap/60/60/24;
        $days = $gap/(60*60*24);
        echo '差距天數：'. $days;
        echo "<br>";
        // echo date("d", $gap);
    ?>

    <h2>計算距離自己下一次生日還有幾天</h2>

    <?php
        $start = date("Y-m-d");
        $end = "2025-10-23";

        $startTime = strtotime($start);
        echo '今天日期：'.$startTime;
        echo "<br>";

        $endTime = strtotime($end);
        echo '下次生日日期：'.$endTime;
        echo "<br>";

        $gap = $endTime - $startTime;
        echo '差距秒數：' . $gap;
        echo "<br>";

        $days = $gap/(60*60*24);
        echo '距離下次生日：'. $days . '天';
        echo "<br><br>";
        // echo date("d", $gap);
    ?>

    <div class="questions">
        <h3>利用date()函式的格式化參數，完成以下的日期格式呈現</h3> 
        <ul>
            <li>2021/10/05</li>
            <li>10月5日 Tuesday</li>
            <li>2021-10-5 12:9:5</li>
            <li>2021-10-5 12:09:05</li>
            <li>今天是西元2021年10月5日 上班日(或假日)</li>
        </ul>
    </div>
    <?php
        $weekString = [
            'Monday' => ['min' =>'一', 'short'=>'周一', 'fulltext'=>'星期一'],
            'Tuesday' => ['min' =>'二', 'short'=>'周二', 'fulltext'=>'星期二'],
            'Wednesday' => ['min' =>'三', 'short'=>'周三', 'fulltext'=>'星期三'],
            'Thursday' => ['min' =>'四', 'short'=>'周四', 'fulltext'=>'星期四'],
            'Friday' => ['min' =>'五', 'short'=>'周五', 'fulltext'=>'星期五'],
            'Saturday' => ['min' =>'六', 'short'=>'周六', 'fulltext'=>'星期六'],
            'Sunday' => ['min' =>'七', 'short'=>'周日', 'fulltext'=>'星期日'],
        ];

        $time = strtotime("2021-10-05 12:9:5");
        echo date("Y/m/d", $time) . "<br>";
        echo date("m月d日 l", $time) . "<br>";
        echo date("m月d日 ", $time) . $weekString[date("l")]['min'] . "<br>";
        echo date("m月d日 ", $time) . $weekString[date("l")]['short'] . "<br>";
        echo date("m月d日 ", $time) . $weekString[date("l")]['fulltext'] . "<br>";

        echo date("Y-m-d H:i:s", $time) . "<br>";
        echo date("今天是西元Y年m月d日", $time) . "<br>";
        if (date("N")>5){
            echo "假日";
        } else {
            echo "上班日";
        }
    ?>

<div class="questions">
    <h3>利用迴圈來計算連續五個周一的日期，例:</h3> 
    <ul>
        <li>2021-10-04 星期一</li>
        <li>2021-10-11 星期一</li>
        <li>2021-10-18 星期一</li>
        <li>2021-10-25 星期一</li>
        <li>2021-11-01 星期一</li>
    </ul>
</div>
<?php 
    for($i=0; $i < 5; $i++){
        $timetamp= strtotime("+$i week".date("Y-m-d"));
        echo date("Y-m-d ", $timetamp);
        echo $weekString[date("l")]['fulltext'];
        echo "<br>";
    }
?>

<div class="questions">
    <h3>線上月曆製作</h3> 
    <ul>
        <li>以表格方式呈現整個月份的日期</li>
        <li>可以在特殊日期中顯示資訊(假日或紀念日)</li>
        <li>嘗試以block box或flex box的方式製作月曆</li>
    </ul>
</div>
<table class="nine" style="width:20%;">
    <caption>
        <?php echo date("m月");?>
    </caption>
    <tr>
        <td></td>
        <td>日</td>
        <td>一</td>
        <td>二</td>
        <td>三</td>
        <td>四</td>
        <td>五</td>
        <td>六</td>
    </tr>

    <?php 
    $firstDayWeek = date('w', strtotime(date('Y-m-01')));
    echo $firstDayWeek;

    for ($i=1; $i<=7; $i++){
        echo "<tr>";
        echo "<td>$i</td>";
        for ($j=1; $j<=7; $j++){
            echo "<td>";
            $dayNum=($i-1)*7+$j - $firstDayWeek;
            if (date("t")>=$dayNum && $dayNum > 0){
                echo $dayNum;
            }
            echo "</td>";
        }
        echo "</tr>";
    }

    ?>

</table>


    
</body>
</html>