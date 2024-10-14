<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列宣告</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>陣列宣告</h2>
    <?php
        $class=["國文", "英文", "數學", "地理", "歷史"];
        // $students;
        $score=[
            "judy"=>[95,64,70,90,84],
            "amo"=>[88,78,54,81,71],
            "john"=>[45,60,68,70,62],
            "petet"=>[59,32,77,54,42],
            "hebe"=>[71,62,80,62,64]
        ];
    ?>

    <table class='nine'>
        <tr>
            <td></td>
            <?php
                echo "";
                foreach($class as $value) {
                    echo "<td>$value</td>";
                }
            ?>
        <tr>

        <?php
            foreach($score as $name =>$value) {
                echo "<tr>";
                echo "<td>$name</td>";
                foreach($value as $num) {
                    echo "<td>$num</td>";
                }
                echo "</tr>";
            }
            echo "";
        ?>
    </table>

</body>
</html>