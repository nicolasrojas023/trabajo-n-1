<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculadora.php" method="post"> 
        numero1
        <input name="num1" type="int">
        numero2
        <input name="num2"  type="int">
        <button name="sum" value="app" type="submit">suma</button>
        <button name="res" value="app" type="submit">resta</button>
        <button name="div" value="app" type="submit">division</button>
        <button name="multi" value="app" type="submit">multiplicacion</button>
    </form>
    <?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

   
    if(isset($_POST["sum"]) == "app") {
        echo("la suma de $num1 y $num2 es:".$num1+$num2); 
    }
    elseif(isset($_POST["res"]) == "app"){
        echo("la resta de $num1 y $num2 es:".$num1-$num2); 
    }
    elseif(isset($_POST["div"])== "app"){
        echo("la division de $num1 y $num2 es:".$num1/$num2);
    }
    elseif(isset($_POST["multi"])== "app"){
        echo("la multiplicacion de $num1 y $num2 es:".$num1*$num2);
    }
   

     /*if($class("sum"));
        echo("la suma de".$_POST["num1"]."y".$_POST["num2"]."es de".$_POST["num1"] + $_POST["num2"]);
    
   class sum 
    {
        function suma(){
            print( "la suma total de  ".$_POST["num1"]. "y".$_POST["num2"]."es de".$_POST["num1"]+$_POST["num2"]);
        } 

    };
      
      class sum {
        echo("la suma es:". $_POST["num1"]  +  $_POST["num2"]);
      }*/
    ?>
</body>
</html>
