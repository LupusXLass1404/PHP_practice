<?php 

include_once './db.php';


$sql = "Select * From `item` Where id = {$_GET['id']}";
$row = db() -> query($sql) -> fetch(PDO::FETCH_ASSOC);

dd($rows);

?>

<form action="./upload_item.php?id=<?=$_GET['id'];?>" method="post" enctype="multipart/form-data">
    <div>
        <img src="./upload/<?=$row['img'];?>" width=100px><br>
        <input type="file" name="img">
    </div>
    <div>
        商品名稱：
        <input type="text" name="name" value="<?=$row['name'];?>">
    </div>
    <div>
        價錢
        <input type="number" name="cost" id="" value="<?=$row['cost'];?>" min="0">
    </div>

    <input type="submit" value="修改">
    <input type="reset" value="重置">
</form>