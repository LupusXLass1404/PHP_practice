<style>
    * {
        font-family: 'courier new';
    }
</style>

<?php
    function starts($shape,$line){
        switch ($shape) {
            case "稜形":
                for($i=1; $i<$line*2; $i++){
                    for($j=0; abs($line-$i) > $j; $j++){
                        echo "&nbsp"; 
                    }
                    for($k=0; 2*($line-abs($line-$i))-1 > $k; $k++){
                        echo "*"; 
                    }
                    echo "<br>";
                }
                echo "<br>";
                break;
            case "三角形":
                for($i=0; $i<$line; $i++){
                    for($j=0; ($line-1-$i) > $j; $j++){
                        echo "&nbsp"; 
                    }
                    for($k=0; (1+$i*2) > $k; $k++){
                        echo "*"; 
                    }
                    echo "<br>";
                }
                break;
        }
    }

    function all($table){
        $dsn="mysql:host=localhost;charset=utf8;dbname=crud";
        


        $pdo=NEW PDO($dsn, 'root', '');
        $sql="SELECT * from $table";
        $rows=$pdo-> query($sql) ->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
?>
$dbs = "mysql:host"