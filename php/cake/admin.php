<?php 
include_once './db.php'; 
?>

<style>
img {
    width: 100px;
}
</style>

<a href="./index.php">回到首頁</a>

<form action="./upload_item.php" method="post" enctype="multipart/form-data">
    <div>
        <input type="file" name="img" id="">
    </div>
    <div>
        商品名稱：
        <input type="text" name="name" id="">
    </div>
    <div>
        價錢
        <input type="number" name="cost" id="" value="0" min="0">
    </div>

    <input type="submit" value="新增商品">
    <input type="reset" value="重置">
</form>

<form action="./edit_item.php?id=<?=$row['id'];?>" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>圖片</td>
            <td>商品名稱</td>
            <td>價格</td>
            <td></td>
        </tr>

        <?php 
        $rows=all();
        foreach($rows as $row){
        ?>
        <tr>
            <td>
                <img src="./upload/<?=$row['img'];?>" alt="">
            </td>
            <td>
                <?=$row['name'];?>
            </td>
            <td>
                <?=$row['cost'];?>
            </td>
            <td>
                <a href="./edit_item.php?id=<?=$row['id'];?>">修改</a>
            </td>
            <td>
                <a href="./del_item.php?id=<?=$row['id'];?>">刪除</a>
            </td>
        </tr>
        <?php
        }
        ?>

    </table>
</form>