<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>程式語言基礎-流程</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>流程-if-else</h1>
    <?php
        $score = 75;
        if ( $score >= 60 ) {
            echo "及格";
        } else {
            echo "不及格";
        }
    ?>

    <h1>switch...case</h1>
    <?php
        $arr = ['A*','A', 'B', 'C', 'D', 'E'];
        $level = $arr[array_rand($arr)];
        echo "Level: $level;";
        switch($level) {
            case "A*":
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
            default:
                echo "是否無心學業？";
    }

    ?>

    <h1>三元運算子</h1>

    <?php
        $score = rand(0,100);
        echo "Score: $score; ";
        echo ($score >= 60) ? "及格" : "不及格";
    ?>


    <?php
        $score = rand(0,120);
        echo "<br>";
        echo "Score: $score; " . (($score > 100) ? "cheat" : (($score > 60) ? "pass" : "fail"));
    ?>

</body>
</html>