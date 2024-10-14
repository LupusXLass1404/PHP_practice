<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>流程結構練習</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>流程結構練習</h1>
<div class="questions">
        <h3>判斷成績及格學生級</h3>
        <ul>
            <li>給定一個成績數字，判斷是否及格(60)分</li>
        </ul>
        <h3>分配成績等級</h3>
        <ul>
            <li>給定一個成績數字，根據成績所在的區間，給定等級</li>
            <li>0 ~ 59 => E</li>
            <li>60 ~ 69 => D</li>
            <li>70 ~ 79 => C</li>
            <li>80 ~ 89 => B</li>
            <li>90 ~ 100 => A</li>
        </ul>
        <h3>依據學生成績等級給予評價</h3>
        <ul>
            <li>根據學生不同的成績等級在網頁上印出不同的文字評價</li>
        </ul>
    </div>
    <?php
        $score = rand(-10,110);
        // $score = 60;
        echo "Score: $score; " . (($score > 100 || $score < 0) ? "成績錯誤" : (($score >= 60) ? "及格" : "不及格")) . "。";;

        if ($score > 100 || $score < 0) {
            $level = "Error";
        } elseif ($score >= 90) {
            $level = "A";
        } elseif ($score >= 80) {
            $level = "B";
        } elseif ($score >= 70) {
            $level = "C";
        } elseif ($score >= 60) {
            $level = "D";
        } else {
            $level = "E";
        }
        
        echo "Level: $level; ";
        switch ($level) {
            case "A":
                echo "表現優良，請繼續保持。";
            break;
            case "B":
                echo "值得肯定，還有進步空間。";
            break;
            case "C":
                echo "需要更多的練習。";
            break;
            case "D":
                echo "需要加強基本功。";
            break;
            case "Error":
                echo "成績需要在0~100之間。";
            break;
            default:
                echo "是否無心學業？";
         }
        
    ?>

    <hr><br>
    <div class="questions">
        <h3>閏年判斷，給定一個西元年份，判斷是否為閏年</h3>
        <ul>
            <li>地球對太陽的公轉一年的真實時間大約是365天5小時48分46秒，因此以365天定為一年 的狀況下，每年會多出近六小時的時間，所以每隔四年設置一個閏年來消除這多出來的一天。</li>
            <li>公元年分除以4不可整除，為平年。</li>
            <li>公元年分除以4可整除但除以100不可整除，為閏年。</li>
            <li>公元年分除以100可整除但除以400不可整除，為平年。</li>
        </ul>
    </div>

    <?php
        $year = rand(0,2024);
        $year = 2400;
        $year = 2500;
        $year = 2404;
        // $year = 2403;

        echo "西元 $year 年是「";
        // Steps 1
        if ($year%4 == 0) { //4可整除
            if ($year%100 == 0) { //100可整除
                if ($year%400 == 0) { //400可整除
                    echo "閏年";
                } else {
                    echo "平年";
                }
            } else {
                echo "閏年";
            }
        } else {
            echo "平年";
        } echo "、";

        // Steps 2
        if ($year%4 == 0) { //4可整除
            if ($year%100 == 0 && $year%400 != 0) { //100可整除 且 400不可整除
                echo "平年";
            } else {
                echo "閏年";
            }
        } else { //$year%4 != 0
            echo "平年";
        } echo "、";

        // $year%4 == 0 && ($year%100 == 0 && $year%400 != 0) => true => 閏年 / false => 平年
        // 2400  true   && (    true       &&    false      ) => false => 平年
        // 2500  true   && (    true       &&    true       ) => true  => 閏年
        // 2404  true   && (    false      &&    true       ) => false => 平年
        // 2403  false  && (    false      &&    true       ) => false => 平年

        // $year%4 != 0 || ($year%100 != 0 && $year%400 == 0) => true => 平年 / false => 潤年
        // 2400  false  || (    true       &&    false      ) => false => 閏年
        // 2500  false  || (    true       &&    true       ) => true  => 平年
        // 2404  false  || (    false      &&    true       ) => false => 閏年
        // 2403  true   || (    false      &&    true       ) => true  => 平年


        if ($year%4 == 0) { //4可整除
            if ($year%100 != 0 || $year%400 == 0) { //100不可整除 或 400可整除
                echo "閏年";
            } else {
                echo "平年";
            }
        } else {
            echo "平年";
        } echo "、";

        // Steps 3
        // $year%4 == 0  ($year%100 == 0 && $year%400 != 0) == false ==> 閏年
        // $year%4 != 0  ($year%100 == 0 && $year%400 != 0) == true ==> 閏年

        if ($year%4 != 0 || ($year%100 == 0 && $year%400 != 0)) { //4不可整除 或 100可整除 且 400不可整除
            echo "平年";
        } else {
            echo "閏年";
        }


        echo "」。"; 
        echo "<br>"; 
    ?>

    <?php
        echo "西元 $year 年是「";
        if (($year%4 == 0 && $year%100 !==0) || $year%400 == 0) {
            echo "閏年";
        } else {
            echo "平年";
        }
        echo "」。"; 
    ?>
    
    
</body>
</html>