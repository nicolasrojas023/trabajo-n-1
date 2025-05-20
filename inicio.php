<!DOCTYPE html>

<html>
<body>
    
<?php
$name = 'Linus';
echo "hola mundo";
print '<h1>Hello $name</h1>';
print "<h1>Hello ".$name."</h1>";
echo '<h1>hola '.$name.'</h1> '; 
echo "<h1>hola $name</h1> ";
$x= 4;
var_dump($x);
$carros= array('mazda','toyota','bmw');
$numeros=array(1,2,3,4,5,6);
var_dump    ($carros);
var_dump($numeros);
$texto="hola"; 
$reves = strrev($texto);
echo "Al revés: " . $reves;

?>

</html>
</body>