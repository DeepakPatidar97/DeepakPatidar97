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
        $x = date("H");
        if($x < 06){
            echo "if".$x;
        }elseif($x > 20){
            echo "elseif ".$x;
        }else{
            echo "else ".$x;
        }
        ?>
    </body>
</html>
