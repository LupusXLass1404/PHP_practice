<nav>
    <a href="./index.php">
        <span class="jump">首</span>
        <span class="jump">頁</span>
    </a>
    ｜
    <a href="./about.php">
        <span class="jump">關</span>
        <span class="jump">於</span>
        <span class="jump">我</span>
        <span class="jump">們</span>
    </a>
    ｜
    <a href="./product.php">
        <span class="jump">產</span>
        <span class="jump">品</span>
        <span class="jump">介</span>
        <span class="jump">紹</span>
    </a>
    ｜
    <a href="./conatac.php">
        <span class="jump">聯</span>
        <span class="jump">絡</span>
        <span class="jump">我</span>
        <span class="jump">們</span>
    </a>
    ｜
    <a href="./login.php">
        <span class="jump">登</span>
        <span class="jump">入</span>
    </a>
</nav>



<?php
    $title = [
        'index' => "首頁",
        'about' => "關我們",
        'product' => "產銷人發財",
        'conatac' => "遠在天邊的我們",
        'login' => "登入"
    ];
?>
<?php 
    echo "<h1>$title[$page]</h1>";
?>