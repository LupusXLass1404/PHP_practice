<?php

class DB{
    protected $dsn="mysql:host=localhost;charsrt=utf8;dbname=db99";
    protected $pdo;
    protected $table;

    function __construct($table){
        $this->table=$table;
        $this->pdo=new PDO($this->dsn,'root','');
    }


    /**
     * 撈出全部資料
     * 1. 整張資料表
     * 2. 有條件
     * 3. 其它SQL功能
     */

    function all(...$arg){
        $sql= "SELECT * FROM $this->table ";
        if(!empty($arg[0])){
            if(is_array($arg[0])){
                $where=$this->a2s($arg[0]);
                $sql=$sql. "WHERE" . join(" && ", $where);
            }else{
                //$sql=$sql.$arg[0];
                $sql .= $arg[0];
            }
        }

        if(!empty($arg[1])){
            $sql=$sql . $arg[1];
        }
        return $this->fetchAll($sql);
    }

    function find($id){
        $sql= "SELECT * FROM $this->table ";

        if(!empty($id)){
            if(is_array($id)){
                $where=$this->a2s($id);
                $sql=$sql. "WHERE" . join(" && ", $where);
            }else{
                $sql .= " WHERE `id`='$id' ";
            }
        }
        return $this->fetchOne($sql);
    }

    function del($id){
        $sql= "DELETE FROM $this->table ";

        if(!empty($id)){
            if(is_array($id)){
                $where=$this->a2s($id);
                $sql=$sql. "WHERE" . join(" && ", $where);
            }else{
                $sql .= " WHERE `id`='$id' ";
            }
        }
        return $this->pdo->exec($sql);
    }

    /**
     * 把陣列轉成條件字串陣列
     */

     function save($array){
        if(isset($array['id'])){
            //update
            $id=$array['id'];
            unset($array['id']);
            $set = $this->a2s($array);

            $sql = "UPDATE $this->table SET ".join(',',$set)." WHERE `id` = '$id'";
        } else {
            //insert
            $cols=array_keys($array);      

            $sql = "INSERT INTO $this->table (`".join("`,`",$cols)."`) VALUES('".join("','",$array)."')";
        }
        // echo $sql;
        return $this->pdo->exec($sql);
     }

     function a2s($array){
        $tmp=[];
        foreach($array as $key => $value){
            $tmp[] = "`$key` = '$value'";
        }
        return $tmp;
     }

    /**
     * 取得單筆資料
     */
    function fetchOne($sql){
        //echo $sql;
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * 取得多筆資料
     */
    
    function fetchAll($sql){
        //echo $sql;
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
     }

     /**
      * 
      */

    function max($col, $where=[]){
        return $this->math('max', $col, $where);
    }

    function sum($col, $where=[]){
        return $this->math('sum', $col, $where);
    }

    function min($col, $where=[]){
        return $this->math('min', $col, $where);
    }

    function avg($col, $where=[]){
        return $this->math('avg', $col, $where);
    }

    function count($where=[]){
        return $this->math('count', '*', $where);
    }

    /**
     * 方便使用各種聚合函數
     */

    protected function math($math, $col='id', $where=[]){
        $sql= "SELECT $math($col) FROM $this->table";
        if(!empty($where)){
            $tmp=$this->a2s($where);
            $sql=$sql . " WHERE " . join("&&", $tmp);
        }
        return $this->pdo->query($sql)->fetchColumn();
     }



}

// function q($sql){
//     return $this->pdo->query($sql)->fetchAll();
// }

function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

$DEPT=new DB('dept');
// $dept=$DEPT->find(['name'=> '商業經營科']);
// $DEPT->del(2);
// $DEPT->save(['code'=>'5889', 'id'=>'7', 'name'=>'資訊發展部']);

// echo $DEPT->math('','id');

// dd($dept);

echo $DEPT->max('id',['code'=>'503']);
// echo $DEPT->count();