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
            protected $name='Abb';
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

            public function getName(){
                return $this->name;
              } 
            
            public function setName($name){
                $this->name=$name;
            } 
        }

        // 實例化(instance)
        $cat =new Animal('cat', 'Kitty', 'white');

        // echo $cat->type;
        echo $cat->get('name');
        // echo $cat->hair_color;

        // echo $cat->run();
        // echo $cat->speed();

        $cat->set('name','Mary');
        echo $cat->get('name');
    ?>

    <h2>繼承</h2>

    <?php
        class Cat extends Animal implements Behavior{
            protected $type='cat';
            // protected $name="Judy";

            function __construct($name, $hair_color){
                $this->name=$name;
                $this->hair_color=$hair_color;
            }

            function jump(){
                echo $this->name."jumpping 2m";
            }
        }

        interface Behavior {
            public function run();
            public function speed();
            public function jump();
        }
        

        $mycat=new Cat('Judy','white');

        echo $mycat->get('name');
        echo $mycat->run();
        echo $mycat->jump();
        echo "<br><br>";
        
        class Dog extends Animal implements Behavior{
            protected $type='dog';

            function __construct($name, $hair_color){
                $this->name=$name;
                $this->hair_color=$hair_color;
            }

            function jump(){
                echo $this->name."jumpping 2m";
            }
        }

        $mydog=new Dog('William', 'black');

        echo $mydog->get('name');
        echo $mydog->run();
        echo $mydog->jump();

    ?>
    
</body>
</html>