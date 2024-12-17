<?php
    include_once 'db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


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
    $rows=all();
    
    dd($rows);

    ?>


</body>

</html>