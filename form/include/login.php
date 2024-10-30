<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $page="login";
        include("./common/nav.php");
    ?>
    
    <main>
        <p>帳號：RRRR；密碼是四個零。</p>
        <form action="" method="post">
            <div>
                <label for="username">RRRR：</label>
                <input type="text" id="username" name="username">
            </div>
            <div>
                <label for="password">四個零：</label>
                <input type="password" id="password" name="password">
            </div>
            <input type="submit" value="為什麼這裡有個登入按鈕？">
        </form>
    </main>

    <?php include("./common/footer.html");?>
</body>
</html>