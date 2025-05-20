<?php
    

    if($_POST["ora"]==strrev($_POST["ora"]) ){
        echo($_POST["ora"]. " es un palindromo");

    }
     else {
    echo($_POST["ora"]. " no es un palindromo");
    }
?>  