<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>for loop</h1>
    <?php
        for($i=0; $i<10; $i++) {
            // 每次迴圈結束後都會自動+1
            echo $i . "<br>";
        }

        echo "i = $i";

    ?>
    <h1>while</h1>
    <?php
        $score=30;
        $counter=0;
        while($score<60){
            $score = $score + 10;
            $counter++;
        }
        echo $score;
        echo "<br>";
        echo $counter;
    ?>

    <h1>陣列</h1>
    <?php
        $arr = ["a", "b", "c", "b", "c", "b", "c", "b", "c", "b", "c", "b", "c", "b", "c"];

        for($i=0; $i<count($arr); $i++){
            echo $arr[$i] . "<br>";
        }

    ?>
</body>
</html>