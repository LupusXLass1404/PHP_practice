<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_GET['err'])) {
            echo "帳號或密碼錯誤";
        }
    ?>
    <form action="check_login.php" method="post">
        <div>
            <label for="">帳號</label>：
            <input type="text" name="acc" id="">
        </div>
        <div>
            <label for="">密碼</label>：
            <input type="password" name="pw" id="">
        </div>
        <input type="submit" value="登入">
    </form>

    
</body>
</html>