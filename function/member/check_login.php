<?php
    if(!isset($_POST['acc'])&&!isset($_POST['pw'])){
        header("location:login_form.php");
        exit();
    }

    $acc = $_POST['acc'];
    $pw = $_POST['pw'];

    $dsn="mysql:host=localhost;charset=utf8;dbname=crud";
    $pdo=new PDO($dsn, 'root','');

    $sql="SELECT count(id) FROM `member` WHERE `acc`='$acc' && `pw`='$pw'";
    $row=$pdo->query($sql)->fetchColumn();

    // echo "<pre>";
    // print_r($row);
    // echo "</pre>";

    if($row>=1){
        // echo "登入成功";
        header("location:success_login.php");
    } else {
        // echo "登入失敗";
        header("location:login_form.php?err=1");
    }

    
?>
