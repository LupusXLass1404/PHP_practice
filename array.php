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
            <br><br>
    
    <div class="questions">
        <h3>利用程式來產生陣列</h3>
        <ul>
            <li>以迴圈的方式產生一個九九乘法表</li>
            <li>將九九乘法表的每個項目以字串型式存入陣列中</li>
            <li>再以迴圈方式將陣列內容印出</li>
        </ul>
    </div>
    <?php
    $nine=[];

    for($i=1; $i<=9; $i++){
        for($j=1; $j<=9 ;$j++){ 
            $nine[] =  "$i x $j = " . ($i*$j);
        }
    }

    // print('<pre>');
    // print_r($nine);
    // print('</pre>');

    // $count = 0;
    // foreach($nine as $index => $n){
    //     echo $n . ", ";
    //     $count++;

    //     if($count == 9){
    //         echo "<br>";
    //         $count = 0;
    //     }  
    // }
    ?>


    <table class="nine">
        <?php
        foreach($nine as $index => $n){
            // preg_match('/(\d+)$/', $n, $matches);
            // $num = $matches[0];
            
            $num=explode("=", $n)[1];

            if ($index % 9 == 0){
                echo "<tr>";
                echo "<td>" . ($index/9 + 1) . "</td>";
            }

            echo "<td>$num</td>";

            if($index % 9 == 8) {
                echo "</tr>";
            }
        }
        ?>
    </table>

    <?php
    $nine=[];

    for($i=1; $i<=9; $i++){
        for($j=1; $j<=9 ;$j++){ 
            $nine[] = ['formula'=>$i . " x " . $j, 'value' => $i*$j];
        }
    }

    print('<pre>');
    print_r($nine);
    print('</pre>');
    ?>

</body>
</html>