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
        for($x = 1;$x<10;$x++){
            echo $x."<br>";
        }
        $color = array("red","yellow","blue","grey");
        foreach($color as $value){
            echo "$value <br>";
        }
        ?>
    </body>
</html>
