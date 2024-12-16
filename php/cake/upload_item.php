<?php
include_once './db.php';


if (isset($_FILES['img'])) {
    // 查看檔案資料
    
    $tmp = $_FILES['img']['tmp_name'];
    $poth = "./upload/{$_FILES['img']['name']}";
    move_uploaded_file($tmp, $poth);
    $_POST['img']=$_FILES['img']['name'];
    dd($_FILES['img']);
}


$tmp = array_keys($_POST);
$spl = "Insert Into `item` (`".join("`, `",$tmp)."`) Value ('".join("', '", $_POST)."')";

db() -> exec($spl);


to('./admin.php');

?>