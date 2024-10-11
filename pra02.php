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
    
</body>
</html>