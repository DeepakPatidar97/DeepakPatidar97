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
    <body><?php

        function disp() {
            echo $_POST["name"];
            echo "<br>";
            echo $_POST["email"];
            echo "<br>";
            echo $_POST["website"];
            echo "<br>";
            echo $_POST["comment"];
            echo "<br>";
            echo $_POST["gender"];
        }
        disp();
        ?>
    </body>
</html>
