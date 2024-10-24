<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>字串取代</h2>
    <?php
        $str="aaddw1123,123";
        echo str_replace("aaddw1123", "*********", $str);
        echo "<br>";
        echo str_replace(['a', 'd', 'w', '1', '2', '3'], "*", $str);
        echo "<br>";
        $str=str_repeat("*", mb_strlen($str));
        echo $str . "<br>";
    ?>
    <hr>

    <h2>字串分割／字串組合</h2>
    <?php
        $str="this,is,a,book";
        $str=explode(",", $str);
        print_r($str);
        echo "<br>";
        // $str=implode(" ", $str);
        $str=join(" ", $str);
        echo $str;
        echo "<hr>";
    ?>
    <hr>

    <h2>子字串取用</h2>
    <?php
        $str="The reason why a great man is great is that he resolves to be a great man";
        $str=substr($str,0, 10) . "...";
        echo $str. "<br>";

        $str="偉大之人之所以偉大，是因為他下定決心要成為偉大的人。";
        // $str=substr($str,0, 10);
        $str=mb_substr($str,0, 10);
        echo $str;


        echo "<hr>";
    ?>
    <hr>
    
    <style>
        .code {
            color: red;
            font-size: 40px;
        }
     </style>
    <div class="questions">
        <h3>尋找字串與HTML、css整合應用</h3> 
        <ul>
            <li>給定一個句子，將指定的關鍵字放大</li>
            <li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
            <li>請將上句中的 “程式設計” 放大字型或變色.</li>
        </ul>
    </div>
    <?php
        $str = "學會PHP網頁程式設計，薪水會加倍，工作會好找";
        $keyword = "程式設計";
        $strStyle = "<span class='code'>$keyword</span>";
        echo str_replace($keyword, $strStyle, $str);
    ?>

</body>
</html>