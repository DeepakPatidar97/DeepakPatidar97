<?php 
$string = "Deepak Good morning ";
$int = 10;
$float = 2.5;
$i;
echo "Hi $string <br>";
echo "you int value is $int And float value is $float <br>";
$x = $int*$float;
echo "Both value to multiplaye is $x <br>";

function displayVariable(){
    global $x;
//   $global['i'] = $global ['int'] + $global ['float'];
   echo $x."<br>";
}
displayVariable();
echo" <br>".$int."<br>";
?>

<?php
static $x;
$x =45;
echo "the static variable testing ".$x."<br>";
function prefix(){
    static $m = 12;
    echo $m."<br>";
    $m++;
    
    static $n = 12;
    echo $n."<br>";
    --$n;
}
prefix();
prefix();
prefix();
?>