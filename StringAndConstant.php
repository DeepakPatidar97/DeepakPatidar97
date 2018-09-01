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
        echo '<h1>Legth in text</h1>';
        echo $text = "Hello deepak How are you?";
        echo strlen($text);
        echo '<h1>word count</h1>';
        echo str_word_count($text);
        echo '<h1>Repeat text</h1>';
        echo str_repeat($text);
        echo '<h1>split text</h1>';
        echo str_split($text);
        echo '<h1>replace in text</h1>';
        echo str_replace("deepak", "world", $text);
        echo '<h1>position text</h1>';
        echo strpos("deepak",$text);
        echo '<h1>revers in text</h1>';
        echo strrev($text);
        ?>
    </body>
</html>
