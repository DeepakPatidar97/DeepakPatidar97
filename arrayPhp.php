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
        $Students = array("Aman","Deepak","Rahul","Manish","Ajay","ashwin");
        $lengt = count($Students);
        echo "array lenth is $lengt";
        echo "<br> ".$Students[0]." ,<br> ".$Students[1]." ,<br> ".$Students[2]." <br>";
        for($x=0;$x<$lengt;$x++){
            echo "$Students[$x] <br>";
        }
        
        $age = array("Aman"=>"25","Deepak"=>"27","Rahul"=>"22","Manish"=>"26","Ajay"=>"22","ashwin"=>"28");
        foreach ($age as $x=>$x_value){
            echo "Key $x  value  $x_value  <br>";
            
        }
        echo "<br><h1>Sorting in Array</h1><br>";
        $Students = array("Aman","Deepak","Rahul","Manish","Ajay","ashwin");
                echo rsort($Students);
        echo asort($age);
        echo rsort($age);
        echo ksort($age);
        echo arsort($age);
        ?>
    </body>
</html>
