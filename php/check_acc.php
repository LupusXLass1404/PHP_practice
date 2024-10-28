<?php

$acc=$_POST['username'];
$pw=$_POST['password'];

if ($acc=='Nemo' && $pw =='cute'){
    echo "帳密正確，登入成功。";
} else {
    echo "登入失敗。";
    // echo "<li><a href="login.php">返回</a></li>";
}

?>