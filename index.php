<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>程式語言基礎</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- <form id="myForm" action="index.php" method="POST">
        <input type="hidden" name="jsNumber" id="jsNumber">
        <button type="submit">Submit</button>
    </form> -->

    <!-- <script>
        // var number = 158; // 這是 JavaScript 的數字
        document.getElementById('jsNumber').value = number;
    </script> -->

    <!-- <?php
        $jsNumber = $_POST['jsNumber'];
        echo "The number from JavaScript is: " . $jsNumber;
    ?>  -->

    <?php
        define("PI",3.1415);
        echo "PI: ".PI;

        // bug
        // define("PI",5.211314);
        // echo "<br>"."PI: ".PI;
    ?>

    <?php
        $price = 100;
        $name = "Apple";

        echo "<br>" . "<br>";
        echo $name;
    ?>
    Price: <?php echo $price;?>
    
    

    <h2>練習-1</h2>
    <pre>
        <b>給定兩個變數，請思考如何交換兩個變數的值<b>

        例：
        $a = 10; $b = 50;
        交換後
        $a = 50; $b = 10;
    </pre>
    
    <?php
        $a = 10; 
        $b = 50;
        $arr = [$a, $b];

        // $a_tmp = $a;
        // $a = $b;
        // $b = $a_tmp;
        // unset($a_tmp)

        $a = $arr[1];
        $b = $arr[0];
        unset($arr);

        echo "a= $a, b= $b";    
    ?>
    
    <h2>練習-2</h2>
    
    <pre>


    </pre>
    <?php
    
    ?>

    

</body>
</html>