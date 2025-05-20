<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""  method="post">
        <h1>adivina el numero</h1>
        <h2>estoy pensando en un numero del 1 al 10 intenta adivinarlo</h2>
        <input type="number" name="adnum">
        <button  type="submit" >verificar</button>
    </form>
    <?php
    session_start();

$rand=rand(1,10);
if(!isset($_SESSION["a"])){
$_SESSION["a"]=$rand;}

echo "session ".$_SESSION['a']."<br>";
$num=$_POST["adnum"]?? null;
if($_SESSION["a"]==$num ){
    
    echo("felicidades adivinaste el numero");
   // header("location:".$_SERVER['PHP_SELF']);
}
elseif($_SESSION["a"]!=$num){
    echo"sigue intentando el numero era ";
    //header("location: index.php");
};
    ?>
</body>
</html>