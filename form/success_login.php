<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            padding:0 8px;
        }
    </style>
</head>
<body>
    <h1>登入成功</h1>
    <?php 
        $dsn="mysql:host=localhost;charset=utf8;dbname=crud";
        $pdo=new PDO($dsn, 'root', '');

        $sql="select * from classes";

        $sql="SELECT * FROM `member`";
        $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        // echo "<pre>";
        // print_r($rows);
        // echo "</pre>";
    ?>

    <table>
        <tr>
            <td>id</td>
            <td>acc</td>
            <td>pw</td>
            <td>email</td>
            <td>tel</td>
            <td>操作</td>
        </tr>
        <?php
            foreach($rows as $row){
        ?>
        <tr>
            <td><?=$row['id'];?></td>
            <td><?=$row['acc'];?></td>
            <td><?=$row['pw'];?></td>
            <td><?=$row['email'];?></td>
            <td><?=$row['tel'];?></td>
            <td>
                <a href="edit_form.php?id=<?=$row['id'];?>">編輯</a>
                <a href="del.php?id=<?=$row['id'];?>">刪除</a>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>




    <a href='login_form.php'>登出</a>
</body>
</html>