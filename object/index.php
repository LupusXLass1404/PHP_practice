<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>物件的宣告</h2>
    <?php
        class Animal {
            protected $type='animal';
            protected $name='John';
            protected $hair_color='black';
            protected $feet= ['front-left', 'front-right', 'back-left', 'back-right'];
            
        
            function __construct($type, $name, $hair_color){
                $this->type=$type;
                $this->name=$name;
                $this->hair_color=$hair_color;
            }
    
            function run(){
                echo $this->name.' is running';
            }
    
            function speed(){
                echo $this->name.' is running at 20/km/h';
            }

            public function get($va){
                return $this->$va;
            }

            public function set($va, $n){
                $this->$va= $n;
            }
        }

        // 實例化(instance)
        $cat =new Animal('cat', 'Kitty', 'white');

        // echo $cat->type;
        echo $cat->get('name');
        // echo $cat->hair_color;

        // echo $cat->run();
        // echo $cat->speed();

        echo $cat->get('name');
        $cat->set('name','Jon');
        echo $cat->get('name');
    ?>
    
</body>
</html>