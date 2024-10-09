<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>流程結構練習</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="questions">
    <h3>使用for迴圈來產生以下的數列</h3>

    <ul>
        <li>1,3,5,7,9……n</li>
        <li>10,20,30,40,50,60……n</li>
        <li>3,5,7,11,13,17……97</li>
    </ul>
</div>
    <?php
        for ($i=1; $i < 20; $i += 2) {
            echo $i . ",";
        }
        echo "<br>";

        for ($i=1; $i < 10; $i++) {
            echo $i*10 . ",";
        }
        echo "<br>";

        $num = 50;
        $prime = [];

        // for ($i=2; $i <= $num; $i++) {
        //     for($j=2; $j < $i; $j++){
        //         if () {

        //         } else {

        //         }
                
        //     }
        //     echo $i;
        // }


    ?>

    <hr><br>
    <div class="questions">
        <h3>九九乘法表</h3>
        <ul>
            <li>以表格排列的九九乘法表</li>
        </ul>
        <img src="https://mackliu.github.io/php-book/2021/09/19/basic-lesson-02/basic-lesson-02-001.png">
        <ul>
            <li>以交叉計算結果呈現的九九乘法表</li>
        </ul>
        <img src="https://mackliu.github.io/php-book/2021/09/19/basic-lesson-02/basic-lesson-02-002.png">
    </div>
    <h3>以表格排列的九九乘法表</h3>
    <table class="bord">
        <?php 
            for ($i=1; $i < 10; $i++) { 
                echo "<tr>";
                for ($j=1; $j < 10; $j++) { 
                    echo "<td>$i x $j = " . ($i*$j) . "</td>";
                }
                echo "</tr>";
            }

        ?>
    </table>
    <h3>以交叉計算結果呈現的九九乘法表</h3>
    <table class="nine bord">
        <?php 
            for ($i=0; $i < 10; $i++) { 
                echo "<tr>";
                for ($j=0; $j < 10; $j++) { 
                    echo "<td>";
                    if ($i==0 && $j==0) {
                        echo "";
                    } elseif ($i==0) {
                        echo $j; 
                    } elseif ($j==0) {
                        echo $i;            
                    } else {
                        echo $i*$j;
                    }
                    echo "</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>

    <hr><br>
    <div class="questions">
        <h3>以 * 符號為基礎在網頁上排列出下列圖形:</h3>
        <ul>
            <li>直角三角型</li>
            <li>倒直角三角型</li>
            <li>正三角型</li>
            <li>菱型</li>
            <li>矩形</li>
            <li>內含對角線的矩形</li>
        </ul>
    </div>

    <?php
    $line = 13; 
        $li= $line - 1;
    ?>

    <h3>直角三角型</h3>
    <?php
        for($i=0; $i<$line; $i++) {
            for($j=0; $j<=$i; $j++){
                echo "*"; 
            }
            echo "<br>"; 
        }
    ?>
    <h3>倒直角三角型</h3>
    <?php
        for($i=0; $i<$line; $i++){
            for($j=0; ($line-$i) > $j; $j++){
                echo "*"; 
            }
            echo "<br>";
        }
    ?>
    <h3>正三角型</h3>
    <!-- 4個空白1個星
    3個空白3顆星
    2個空白5顆星
    1個空白7顆星
    0個空白9顆星
    
    星星數量 1+i*2
    空白數量 4-i -->
    

    <?php
        for($i=0; $i<$line; $i++){
            for($j=0; ($li-$i) > $j; $j++){
                echo "&nbsp"; 
            }
            for($k=0; (1+$i*2) > $k; $k++){
                echo "*"; 
            }
            echo "<br>";
        }

        echo "<br>";
        
        // 總數是9 
        // 只有中間的是星星1 3 5 7 9
        // i=1
        // j<9
        // 空白數量是
        // j不管怎樣都要重複5次
        // 可以設變數
        
        // $stay = 1;

        // for($i=0; $i<5; $i++){
        //     $stay = 0;
        //     for($j=0; $j<9 ; $j++){
        //         if ($stay < 1+$i*2 && $j > (8-$i*2)/2) { //感覺單純用8不太好，而且最後一個星星消失了
        //             echo "*"; 
        //             $stay++;
        //         } else {
        //             echo "&nbsp";
        //         }
        //     }
        //     echo "<br>";
        // }
        
    ?>
    <h3>菱型</h3>

    <!-- 到第五列之後要開始遞減
    原本只是純粹把星星加上去而已
    現在要減法
    原本的寫法是單純增加星星數量
    還是用if?
    星星的最大值是9

    第四排7顆星
    第五排9顆星
    第六排7顆星

    原本數量是2n+1
    2*4+1是最大值 n= 4
    n=5時該怎麼把數字變成7?
    2*(4-|(n-4))|+1 -->
    
    <?php
        for($i=0; $i<$line*2; $i++){
            for($j=0; abs($li-$i) > $j; $j++){
                echo "&nbsp"; 
            }
            for($k=0; 2*($li-abs($li-$i))+1 > $k; $k++){
                echo "*"; 
            }
            echo "<br>";
        }
    ?>
    
    <h3>矩形</h3>
   
    <!-- 
    7行
    7顆星
    2顆星5空格 
    -->
    <table class="star">
    <?php
        for($i=0; $i < $line; $i++){
            echo "<tr>";
            for($j=0; $j < $line; $j++){
                echo "<td>";
                if ($i== 0 || $i == $li || $j==0 || $j == $li) {
                    echo "*"; 
                } else {
                    echo "&nbsp";
                }
                echo "</td>";
            }
            echo "</tr>";
        }
    ?>
    </table>
    <h3>內含對角線的矩形</h3>
    <!-- 
    7顆星
    4
    4
    3
    4
    4
    7
    
    *****
    ** ** i = 2, j=4
    * * *
    ** ** i = 4, j=4
    *****

    *******7-25+1
    **   ** i=2, j=6
    * * * * i=3, j=5
    *  *  * i=4, j=4
    * * * * i=5, j=5
    **   ** i=6, j=6
    *******


    不管怎樣一行最多只會有四顆星
    最中間肯定是三顆星

    
    -->
    <table class="star">
    <?php
        for($i=0; $i < $line; $i++){
            echo "<tr>";
            for($j=0; $j < $line; $j++){
                echo "<td>";
                if ($i== 0 || $i == $li || $j==0 || $j == $li) { //最外框線
                    echo "*"; 
                } elseif ($i == $j || $li-$i == $j){ //裡面星星
                    echo "*"; 
                } else {
                    echo "&nbsp";
                }
                echo "</td>";
            }
            echo "</tr>";
        }
    ?>
    </table>
    
    
</body>
</html>