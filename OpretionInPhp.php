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
        echo "<h1>Arithmetic operators</h1>";
        $x = 100;
        $y = 50;
        
        echo $x+$y."<br>";
        echo $x-$y."<br>";
        echo "mult<br>".$x*$y."<br>";
        echo "div<br>".$x/$y."<br>";
        echo "moduler<br>".$x%$y."<br>";
        
        echo "<br><h1> Assignment operators</h1>";
        echo $x += $y;
        echo '<br>';
        echo $x -= $y;echo '<br>';
        echo $x *= $y;echo '<br>';
        echo $x /= $y;echo '<br>';
        echo $x %= $y;echo '<br>';
        echo "<br><h1> Comparison operators</h1>";
        echo 'equal to <br>';
        var_dump($x==$y);
        echo 'equal === <br>';
        var_dump($x===$y);
        echo 'not equal <br>';
        var_dump($x!=$y);
        echo 'less then equal <br>';
        var_dump($x<=$y);
        echo 'greater than equal <br>';
        var_dump($x>=$y);
        echo 'less then <br>';
        var_dump($x<$y);
        echo 'greater <br>';
        var_dump($x>$y);
        echo '<br>';
        
        echo "<br><h1> Increment / Decrement operators</h1>";
        echo ++$x;
        echo '<br>';
        echo --$x;
        echo '<br>';
        echo $x++;
        echo '<br>';
        echo $x--;
        echo '<br>';
        ?>
    </body>
</html>
