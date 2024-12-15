<?php
include_once './db.php';


if (isset($_FILES['img'])) {
    // 查看檔案資料
    echo "<pre>";
    print_r($_FILES['img']);
    echo "</pre>";
} else {
    echo "未上傳檔案。";
}
$dbs="mysql:host=localhost;charset=utf8;dbname=cake";
$pdo=


dd($_POST);

?>