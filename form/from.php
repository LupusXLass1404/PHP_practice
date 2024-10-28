<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算BIM</title>
    <style>
        body {
            padding: 20px;
        }
        fieldset {
            width: 20%;
            border-radius: 8px;
            margin-bottom: 8px;
        }

    </style>
</head>
<body>
    
    <div>BMI計算</div>
    <form action="result.php">
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