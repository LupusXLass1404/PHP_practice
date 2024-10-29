<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>萬年曆</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<h3>萬年曆</h3>
<ul>
    <li>上月、下月</li>
    <li>同一個頁面</li>
    <li>上一年、下一年</li>
</ul>

<ul>
    <li>現在該顯示哪個月份</li>
    <li></li>
    <li></li>
    <li></li>
</ul>
<?php 
    if (isset($_GET['month'])){
        $month=$_GET['month'];
    } else {
        $month=date('m');
    }

    if (isset($_GET['year'])){
        $year=$_GET['year'];
    } else {
        $year=date('Y');
    }

    if($month-1<1){
        $prevMonth=12;
        $prevYear=$year-1;
    } else {
        $prevMonth=$month-1;
        $prevYear=$year;
    }

    if($month+1>12){
        $nextMonth=1;
        $nextYear=$year+1;
    } else {
        $nextMonth=$month+1;
        $nextYear=$year;
    }
?>
<a href="calendar.php?month=<?=$year-12;?>">前年</a>
<a href="calendar.php?year=<?=$prevYear;?>&month=<?=$prevMonth;?>">上個月</a>
<a href="calendar.php?year=<?=$nextYear;?>&month=<?=$nextMonth;?>">下個月</a>
<a href="calendar.php?month=<?=$year+12;?>">明年</a>
<table class="nine" style="width:20%;">
    <caption>
        <?php echo date("$year 年 $month 月");?>
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
    // $saveYear = $month/12 ;
    // $saveMonth = $month % 12;


    $firstDay=date("Y-$month-1");
    $firstDayTime = strtotime($firstDay);
    $firstDayWeek = date("w", $firstDayTime);
    $thisMonth=date("m", $firstDayTime);
    
    for ($i=1; $i<=7; $i++){
        echo "<tr>";
        echo "<td>$i</td>";
        for ($j=1; $j<=7; $j++){
            // if ($j==1 || $j == 7) {
            //     echo "<td class='holiday'>";
            // } else {
            //     echo "<td>";
            // }
            $cell=($i-1)*7 + ($j-1) - $firstDayWeek;
            $theDayTime=strtotime("$cell  days".$firstDay);
            $w=date("w", $theDayTime);
            $isToday=(date("Y-m-d",$theDayTime)==date("Y-m-d"))?'today':'';

            if (date("m", $theDayTime) != $thisMonth) {
                echo "<td class='grey-text $isToday'>";
             } else if ($w==0 || $w == 6) {
                 echo "<td class='holiday $isToday'>";
            } else {
                echo "<td class='$isToday'>";
            }
            echo date("d", $theDayTime);
            echo "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
    
</body>
</html>