<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

session_start();
// if(!isset($_GET['login'])){
//     header("location:login.php");
//     exit();
// }

$acc=$_POST['username'];
$pw=$_POST['password'];

if ($acc=='0000' && $pw =='123'){
    echo "帳密正確，登入成功。";
    setcookie("login", "$acc",time()+3600);
    echo $_COOKIE["login"];
    // $_SESSION['login']=$acc;
} else {
    echo "登入失敗。";
    // echo "<li><a href="login.php">返回</a></li>";
}

?>
</body>
</html>