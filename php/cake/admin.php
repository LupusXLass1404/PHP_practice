<?php 
include_once './db.php'; 
?>

<style>
img {
    width: 100px;
}
</style>

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