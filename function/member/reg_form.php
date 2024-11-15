<?php
    // if(!empty($_POST['acc'])){
    //     print_r($_POST);
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        h1 {
            text-align: center;
        }

        form {
            width: 400px;
            border: 1px solid #ccc;
            border-radius: 16px;
            padding: 24px;
            margin: 20px auto;
        }

        form div{
            margin:8px 0;
        }

        form label {
            display:inline-block;
            width: 80px;
            text-align-last: justify;
        }

        form input {
            padding: 5px;
            border:0px;
            font-size: 20px;
            border-bottom: 1px solid #eee;
        }

        form input[type=submit],
        form input[type=reset] {
            padding: 5px 10px;
            font-size: 14px;
            background-color: #6cF;
            border-radius: 5px;
            margin: 10px 10px;
            border: 1px solid #eee;
            cursor: pointer;
        }

        form input[type=reset] {
            background-color: #ddd;
        }

        form input[type=submit]:hover,
        form input[type=reset]:hover {
            padding: 16px 24px;
        }

        form div:nth-child(5) {
            text-align: center;
        }

    </style>

</head>
<body>
    <h1>會員註冊</h1>
    <!-- form:post>(div>label+input:text)*4+div>input:submit+input:reset -->
    <form action="reg.php" method="post">
        <div>
            <label for="acc">帳號</label>：
            <input type="text" name="acc" id="acc" required>
        </div>
        <div>
            <label for="pw">密碼</label>：
            <input type="password" name="pw" id="pw" required>
        </div>
        <div>
            <label for="email">電子郵件</label>：
            <input type="text" name="email" id="email">
        </div>
        <div>
            <label for="tel">電話</label>：
            <input type="text" name="tel" id="tel">
        </div>
        <div>
            <input type="submit" value="註冊">
            <input type="reset" value="重置">
        </div>

        <?php
            if (isset($_GET['status'])) {  // 檢查是否有接收到 'status' 這個 POST 參數
                $status = $_GET['status'];
                if ($status == 1) {
                    echo "<p>註冊成功</p>";
                }
            }
        ?>
    </form>
</body>
</html>