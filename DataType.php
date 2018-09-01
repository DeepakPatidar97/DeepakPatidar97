<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $n = 458;
        $text = "I am deepak<br>";
        var_dump($text);
        echo '<br>';
        var_dump($n);
        $float1 =454.542425444442415444;
        var_dump($float1);
        $X = TRUE;
        var_dump($X);
        $arr = array(1,2,3,4,5,"a","b","b");
        var_dump($arr);
        
        
        echo '<h1>Object create </h1>';
        class name{
            function name(){
                $this->name = "pooja";                
            }        
        }
        $name = new name();
        echo $name->name;
        
      
        $x =NULL;
        var_dump($x);
        ?>
        <?php
class Car {
    function Car() {
        $this->model = "VW";
    }
}

// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;
?>
    </body>
</html>
