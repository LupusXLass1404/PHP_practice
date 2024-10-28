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
    $line = 5; 
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
        echo "<br>";
    ?>

    <!-- 
        1. 4空 1星
        2. 3空 3星
        3. 2空 5星
        4. 1空 7星
        5. 0空 9星
        6. 1空 7星
        7. 2空 5星
        8. 3空 3星
        9. 4空 1星
        
        line=5*2 =>10
        i=1 && i < 10 => 會跑9次 => 總共9行

        i=1, j=4, k=1
        i=2, j=3, k=3
        因為j是行數的一半-1
        k是i*2+1
        (5-)

        為什麼$i要減星星的一半？
        因為得保持$在1~5之間 <= 因為超過第五行星星就會變少，所以$i不能超過5
        為什麼還要再減一次星星的一半？
        因為星星是由少到多，

        星星的一半是關鍵點，因為在此會開始遞減
    -->

    <?php
         for($i=1; $i<$line*2; $i++){
            for($j=0; abs($line-$i) > $j; $j++){
                echo "&nbsp"; 
            }
            for($k=0; 2*($line-abs($line-$i))-1 > $k; $k++){
                echo "*"; 
            }
            echo "<br>";
         }
         echo "<br>";
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
    ** ** i = 4, j=2
    *****

    line=7
    ******* i=1, j=7
    **   ** i=2, j=6
    * * * * i=3, j=5
    *  *  * i=4, j=4
    * * * * i=5, j=3
    **   ** i=6, j=2
    *******
    
    i+j一定是8(line+1)
    

    不管怎樣一行最多只會有四顆星
    最中間肯定是三顆星
    -->

    <table class="star">
    <?php
        $line = 6; 
        $li= $line - 1;

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
    <br><br>

    <table class="star">
    <?php
        $line = 10; 

        for($i=1; $i <= $line; $i++){
            echo "<tr>";
            for($j=1; $j <= $line; $j++){
                echo "<td>";
                if ($i== 1 || $i == $line || $j==1 || $j == $line) { //最外框線
                    echo "*"; 
                } elseif ($i == $j || $i+$j==$line+1){ //裡面星星
                    // $line-$i+1 == $j
                    // $i+$j == $line+1
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

    <h3>內含對角線的菱型</h3>

    <!-- 
    line=5

        *                     0
       * *     i=1 j=5        1
      *   *    i=2 j=4~6      3
     *     *   i=3 j=3~7      5
    *       *  i=4 j=2~8      7



     *     *
      *   *
       * *
        *
    -->

    <table class="star">
    <?php
        for($i=0; $i<10; $i++){
            echo "<tr>";
            for($j=0; $j < 10 ; $j++){
                echo "<td>";
                if (abs(4-$i)==$j || 9 - abs(4-$i)==$j ) {
                    echo "*"; 
                } elseif ($j==4 || $i==4) {
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
    <br><br>

    <table class="star">
    <?php
        $line = 5; 

        for($i=1; $i<$line*2; $i++){
            echo "<tr>";
            for($j=1; $j < $line*2 ; $j++){
                echo "<td>";
                if (abs($line-$i)==$j-1 || $line*2 - abs($line-$i)==$j+1 ) {
                    echo "*"; 
                } elseif ($j==$line  || $i==$line ) {
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