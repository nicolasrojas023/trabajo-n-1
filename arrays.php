<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
        margin: 0;
        padding: 0;
        background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
        color: #ffffff;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        min-height: 100vh;
    }

    form {
        background: rgba(255, 255, 255, 0.05);
        border: 2px solid #00ffcc;
        padding: 30px;
        border-radius: 20px;
        box-shadow: 0 0 15px #00ffcc, 0 0 30px #00b3ff;
        backdrop-filter: blur(10px);
        width: 350px;
        margin-bottom: 30px;
    }

    h1, h2, h4 {
        text-align: center;
        color: #00ffee;
        margin-bottom: 20px;
        text-shadow: 0 0 5px #00ffee;
    }

    input[type="text"],
    input[type="number"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: none;
        border-radius: 10px;
        background: #1f1f2e;
        color: #00ffcc;
        box-shadow: inset 0 0 10px #00b3ff;
    }

    button {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        background: linear-gradient(45deg, #00ffcc, #00b3ff);
        border: none;
        border-radius: 10px;
        color: #0f0c29;
        font-weight: bold;
        font-size: 16px;
        cursor: pointer;
        transition: 0.3s ease;
        box-shadow: 0 0 10px #00ffcc;
    }

    button:hover {
        background: linear-gradient(45deg, #00b3ff, #00ffcc);
        transform: scale(1.05);
    }

    ::placeholder {
        color: #00ffcc99;
    }

    .resultado {
        background-color: rgba(255, 255, 255, 0.05);
        border: 1px solid #00ffcc;
        color: #ffffff;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 0 10px #00ffcc;
        max-width: 90%;
        overflow-x: auto;
    }

    .resultado table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .resultado th,
    .resultado td {
        padding: 12px;
        border: 1px solid #00ffee;
        text-align: center;
        color: #ffffff;
        background-color: rgba(0, 255, 255, 0.1);
        text-shadow: 0 0 2px cyan;
    }

    .resultado th {
        background-color: rgba(0, 255, 255, 0.2);
        font-weight: bold;
        color: #00ffee;
    }

    .resultado tr:hover {
        background-color: rgba(0, 255, 255, 0.15);
    }

    </style>
<body>
    <form action="" method="post">
        <h1>ingrese una tarea</h1>
    <input type="text" name="dato" >
    <br>
    <button type="submit" name="ag">agregar tarea</button>
    <button type="submit" name="count">contar</button>
    <button type="submit" name="mostrar">mostrar</button>
    
    <H1>eliminar dato</H1>
    <h4>digite el numero de la columna que desea eliminar</h4>
    <input type="number" placeholder="id " name="eli">
    <button type="submit" name="del">eliminar </button>
    <BUTton type="submit" name="def">eliminar todo</BUTton>

    <h1>edita algun cambio</h1>
    <input type="number" placeholder="id " name="numedit">
    <input type="text" placeholder="cambiar dato" name="editt">
    <button type="submit " name="edit">editar</button>

</form>
</body>
</html>

<div class="resultado">
<?php
session_start();
if(!isset($_SESSION["us"])??null){
    $_SESSION["us"]=array();
}
//agregar
 if(isset($_POST["ag"])??null){

$dato=$_POST["dato"];

$_SESSION["us"][] = $dato;
//array_push();

//print_r($_SESSION["us"]);


foreach($_SESSION["us"] as $clave => $index ){
   //echo "$index <br>    " ;
  
}
echo "as añadido una dato nuevo";

}//eliminar
elseif(isset($_POST["del"])){
  
     unset($_SESSION["us"][($_POST["eli"]-1)]);
    echo "se a eliminado correctamente";
    
    //print_r($_SESSION["us"]);
}//editar
elseif(isset($_POST["edit"])){

$editnum=$_POST["numedit"]-1;
$editt=$_POST["editt"];

$_SESSION["us"][$editnum]=$editt;
echo "se a editado correcta mente";

}//eliminar todo
elseif(isset($_POST["def"])){
   
    unset($_SESSION["us"]);
}//contar
elseif(isset($_POST["count"])){
    $count=count($_SESSION["us"]);
    echo "el numero total de datos son:  $count" ;
}//mostrar tabla
elseif(isset($_POST["mostrar"])){

    echo ("<table>");
    echo ("<tr>
         <th> id</th>
        <th> nombre de la tarea</th>
    <tr>");

        foreach($_SESSION["us"] as $clave=>$index){
           $gua= $clave+1;
            echo ("<tr>
            <td>{$gua}</td>
            <td>{$index}</td>
        
      </tr>");

        }
     echo ("</table>");
}

else{
    echo "ingrese un dato";
}



?>
</div>