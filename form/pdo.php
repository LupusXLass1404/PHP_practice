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
    <h2>班級導師表</h2>
    <?php
    $dsn= "mysql:host=localhost;charset=utf8;dbname=school";
    $pdo=new PDO($dsn, 'root','');

    $sql="select * from classes";

    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // print_r($rows);
    // echo "</pre>";
    ?>

<table>
    <tr>
        <td>序號</td>
        <td>班名</td>
        <td>導師</td>
    </tr>

    <?php
    foreach($rows as $row){
        echo"<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['tutor']."</td>";
        echo"</tr>";
    }
    ?>
</table>
</body>
</html>