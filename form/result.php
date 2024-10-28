<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI結果</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <fieldset>
        <legend>BMI結果</legend>
        <div>您的身高：<?=$_GET['height'];?>公分</div>
        <div>您的體重：<?=$_GET['weight'];?>公斤</div>
        <div>您的BMI為：</div>
        <div>體位判定為：</div>
    </fieldset>

    <div>
        
        <a href="from.php"><button>回首頁／重新計算</button></a>
    </div>
    
</body>
</html>