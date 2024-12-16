<?php


// 資料庫
function db(){
    $dsn = "mysql:host=localhost;charset=utf8;dbname=cake";
    $pdo = new PDO($dsn, 'root', '');
    return $pdo;
}

// 搜尋全部
function all(){
    $sql = 'Select * From `item`';
    return db()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

// 刪除
function del($id){
    $sql = "Delete From `item` Where id = {$id}";
    return db() -> exec($sql);
}

// 重新定義連結
function to($url){
    header("location:".$url);
}

// 看陣列
function dd($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

?>