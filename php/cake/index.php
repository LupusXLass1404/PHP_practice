<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./upload_item.php" method="post" enctype="multipart/form-data">
        <div>
            <input type="file" name="img" id="">
        </div>
        <div>
            商品名稱：
            <input type="text" name="name" id="">
        </div>
        <div>
            價錢
            <input type="number" name="cost" id="" value="0" min="0">
        </div>

        <input type="submit" value="新增商品">
        <input type="reset" value="重置">
    </form>

    <a href="./admin.php">後台</a>

    <table>
        <tr>
            <td><img src="" alt=""></td>
            <td>草莓蛋糕<br>草莓</td>
            <td>數量</td>
            <td>價錢</td>
        </tr>
    </table>

    <?php
    include_once 'db.php';
    
    $rows=all();
    
    dd($rows);

    ?>


</body>

</html>