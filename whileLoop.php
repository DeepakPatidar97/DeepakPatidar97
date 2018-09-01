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
        $x = 1;
        echo "While loop <br>";
        while ($x<6){
            echo $x."<br>";
            ++$x;
        }
        echo "Do While loop <br>";
        $s=1;
        do{
            echo $s."<br>";
            ++$s;
        }while ($s<=6);
        ?>
    </body>
</html>
