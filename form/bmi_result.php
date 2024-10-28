<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI結果</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        if(isset($_GET['height'])){
            $height=$_GET['height'];
        } else if (isset($_POST['height'])){
            $height=$_POST['height'];
        } else {
            echo "請使用正確的管道進到此頁面！";
            exit();
        }
        if(isset($_GET['weight'])){
            $weight=$_GET['weight'];
        } else if (isset($_POST['weight'])){
            $weight=$_POST['weight'];
        } else {
            echo "請使用正確的管道進到此頁面！";
            exit();
        }


        $h = $height/100;
        $bmi = round($weight/pow($h, 2), 2);

        if ($bmi >= 35) {
            $physical = "重度肥胖";
        } elseif ($bmi >= 30) {
            $physical = "中度肥胖";
        } elseif ($bmi >= 27) {
            $physical = "輕度肥胖";
        } elseif ($bmi >= 24) {
            $physical = "過重";
        } elseif ($bmi >= 18.5) {
            $physical = "正常";
        } elseif ($bmi >= 0) {
            $physical = "錯誤";
        } else {
            $physical = "過輕";
        }

        switch ($physical) {
            case '重度肥胖':
            case '中度肥胖':
            case '輕度肥胖':
                $physical_tip = "啊～太胖了！需要立刻力行「健康體重管理」囉！";
                break;
            case '過重':
                $physical_tip = "過重了！要小心囉，趕快力行「健康體重管理」！";
                break;
            case '正常':
                $physical_tip = "恭喜！健康體重，要繼續保持！";
                break;
            case '過輕':
                $physical_tip = "需要多運動，均衡飲食，以增加體能，維持健康！";
                break;
            default:
                $physical_tip = "請檢查您輸入的值是否正確。";
                break;
        }
    ?>
    <fieldset>
        <legend>BMI結果</legend>
        <div>您的身高：<?=$height;?>公分</div>
        <div>您的體重：<?=$weight;?>公斤</div>
        <div>您的BMI為：<?=$bmi;?></div>
        <div>體位判定為：<?=$physical . "。" . $physical_tip;?></div>
    </fieldset>

    <div>
        <a href="bmi.php?bmi=<?=$bmi;?>"><button>回首頁／重新計算</button></a>
    </div>
    
</body>
</html>