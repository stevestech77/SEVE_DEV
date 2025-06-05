<?php
echo "<h2>Response from submitted page.</h2>";
echo "This is Stevestech page, you're welcome.<br>";
echo "The name and other credential submitted are not valid!!!<br>";
echo "PHP syntax is not case sensitive e.g echo is also ECHO captal and small letters are recognized.<br>";
$x = "Green";
echo "I have a ".$x. " bag.<br>";//note, color is not thesame as COLOR in this  . for multiline comment /* */ is used 
echo "Data type for 12.2 is a ";
var_dump(12.2);
echo "<br>";
echo "Data type for 120 is a ";
var_dump(120);
echo "<br>";
echo "Data type for alternate is a ";
var_dump("alternate");
echo "<br>";
echo "Data type for true is a ";
var_dump(true);
echo "<br>";
echo "Data type for 2,3,5,6 is a ";
var_dump(2,3,5,6);
echo "<br>";
echo "Data type for alternate is a ";
var_dump("alternate");
echo "<br>";
/* Using a function and static */
function mytest() {
    static $x = 0;
    echo $x;
    $x++;
}
mytest();
echo "<br>";
mytest();
echo "<br>";
mytest();
echo "<br>";
mytest();
echo "<br>";
$cars = array("Volve","Mercedes","Toyota");
var_dump($cars);    
echo "<br>";
$y = null;
var_dump($y);
echo "<br>";
$x = "Good morning sir";
$y = explode(" ",$x);
print_r($y);
?>