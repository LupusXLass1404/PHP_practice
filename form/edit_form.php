<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- form:post>(div>label+input:text)*4+div>input:submit+input:reset -->
     <?php
        $dsn="mysql:host=localhost;charset=utf8;dbname=crud";
        $pdo=NEW PDO($dsn, 'root', '');

        $mem=$pdo->query("select * from `member` where `id`='{$_GET['id']}'")->fetch(PDO::FETCH_ASSOC);
        // echo "<pre>";
        // print_r($mem);
        // echo "</pre>";
     ?>
     
    <form action="" method="post">
        <div>
            <label for="">帳號</label>：
            <input type="text" name="acc" id="" value="<?=$mem['acc'];?>">
        </div>
        <div>
            <label for="">密碼</label>：
            <input type="text" name="pw" id="" value="<?=$mem['pw'];?>">
        </div>
        <div>
            <label for="">電子郵件</label>：
            <input type="text" name="email" id="" value="<?=$mem['email'];?>">
        </div>
        <div>
            <label for="">電話</label>：
            <input type="text" name="tel" id="" value="<?=$mem['tel'];?>">
        </div>
        <div>
            <input type="submit" value="註冊">
            <input type="reset" value="重置">
        </div>
    </form>
    
</body>
</html>