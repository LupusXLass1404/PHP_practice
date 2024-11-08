<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #fadde1;
            color: #ff5d8f;
        }

        table{
            border-spacing:20px;
            margin: auto;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            border-radius:16px;
        }

        table tr:nth-child(1) td{
            color: #fff;
            background-color:#ff5d8f;
            border: 3px solid #ff5d8f;
            
        }

        a {
            color:#fff;
        }

        h2{
            text-align:center;
            color: #ff5d8f;
            
        }
        tr, td{
            text-align:center;
            background-color:#ffc4d6;
            border: 3px solid #ffa6c1; 
            border-radius:16px;
            padding: 12px 32px;
        }
    </style>
</head>
<body>




<?php
    $id = $_GET["id"];
?>
<?php
    $dsn= "mysql:host=localhost;charset=utf8;dbname=school";
    $dsn= "mysql:host=localhost;charset=utf8;dbname=school";
    $pdo=new PDO($dsn, 'root','');

    $sql="SELECT `classes`.`id` as 'id',
            `classes`.`name` as 'classname',
            `class_student`.`school_num` as 'num',
            `students`.`name` as 'name'
        FROM `classes`, `class_student`, `students`
        WHERE `classes`.`id` = $id && 
            `classes`.`code`=`class_student`.`class_code` &&
            `class_student`.`school_num` = `students`.`school_num`";

    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // print_r($rows);
    // echo "</pre>";
?>
    <h2>學生資料<a href="pdo.php">返回</a></h2>
    
    <table>
        <tr>
            <td>班級</td>
            <td>學號</td>
            <td>名字</td>
        </tr>
        <?php
            foreach($rows as $index => $row){
        ?>
        <tr>
            <td><?=$row['classname'];?></td>
            <td><?=$row['num'];?></td>
            <td><?=$row['name'];?></td>
        </tr>
        <?php
            }
        ?>
    </table>
    


</body>
</html>

