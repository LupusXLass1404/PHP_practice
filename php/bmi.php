<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算BIM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        if(isset($_GET['bmi'])) {
            echo "你上次量測的值的BMI是{$_GET['bmi']}";
        }
    ?>
    
    <div>BMI計算-GET</div>
    <form action="bmi_result.php" method="get">
        <div class="lable">
            <label for="height">
                <fieldset laceholder="身高">
                    <legend>身高</legend>
                    <input type="number" name="height" id="height">
                </fieldset>
            </label>
        </div>
        <div class="lable">
            <label for="weight">
                <fieldset>
                    <legend>體重</legend>
                    <input type="number" name="weight" id="weight">
                </fieldset>
            </label>
        </div>
        <div class="button">
            <input type="submit" value="計算">
            <input type="reset" value="清空／重置">
        </div>
    </form>

    <div>BMI計算-POST</div>
    <form action="result.php" method="post">
        <div class="lable">
            <label for="height">
                <fieldset laceholder="身高">
                    <legend>身高</legend>
                    <input type="number" name="height" id="height">
                </fieldset>
            </label>
        </div>
        <div class="lable">
            <label for="weight">
                <fieldset>
                    <legend>體重</legend>
                    <input type="number" name="weight" id="weight">
                </fieldset>
            </label>
        </div>
        <div class="button">
            <input type="submit" value="計算">
            <input type="reset" value="清空／重置">
        </div>
    </form>
</body>
</html>