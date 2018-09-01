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
        function Name(){
            echo "hello Deepak Your First function create<br>";
        }
        Name();
        
        
        function StudentName($Sname){
            echo "Studenent name is $Sname <br>";
        }
        StudentName("Deepak");
        StudentName("Rahul");
        StudentName("mohan");
        
        function studentinfo($name,$age=20){
            echo "Student name is $name and it is $age years old<br>";
        }
        studentinfo("Deepak",24);
        studentinfo("tarun", 27);
        studentinfo("sohan");
        
        
        function sum($x,$y){
            $z = $x + $y;
            return $z;
            }
            echo "20+45 = ".sum(20, 45)."<br>";
            echo "10+45 = ".sum(10, 45)."<br>";
                    ?>
    </body>
</html>
