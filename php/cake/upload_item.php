<?php
include_once './db.php';

if (isset($_FILES['img'])&& $_FILES['img']['error'] == 0) {
    // 查看檔案資料
    
    $tmp = $_FILES['img']['tmp_name'];
    $poth = "./upload/{$_FILES['img']['name']}";
    move_uploaded_file($tmp, $poth);
    $_POST['img']=$_FILES['img']['name'];
    dd($_FILES['img']);
}

dd($_POST);


if(isset($_GET['id'])){
    // 更新
    $tmp = [];
    foreach($_POST as $key => $value){
        $tmp[] = "`$key`='$value'";
    }
    $sql = "Update `item` Set ".join(", ", $tmp)." Where id = {$_GET['id']}";

}else{
    // 新增
    $tmp = array_keys($_POST);
    $spl = "Insert Into `item` (`".join("`, `",$tmp)."`) Value ('".join("', '", $_POST)."')";
}

echo $sql;

db() -> exec($sql);
to('./admin.php');

?>