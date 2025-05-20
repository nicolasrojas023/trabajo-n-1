<?php
session_start();
$num=$_POST["adnum"];
$rand=rand(1,10);
$_SESSION["a"]=$rand;
echo "session ".$_SESSION['a']."<br>";


if(isset($_SESSION["a"])==$num ){
    echo("felicidades adivinaste el numero");
    
}
elseif( isset($_SESSION["a"])!=$num){
    echo"sigue intentando el numero era ";
    
};



?>