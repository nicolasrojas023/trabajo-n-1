<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina el Número</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
            width: 300px;
        }

        h1, h2 {
            margin-bottom: 20px;
            color: #333333;
        }

        input[type="number"] {
            width: 80%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #cccccc;
            border-radius: 8px;
            font-size: 16px;
        }

        button {
            padding: 10px 20px;
            border: none;
            background-color: #3333cc;
            color: #fff;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #000099;
        }

        .resultado {
            margin-top: 20px;
            font-size: 16px;
            color: #555;
        }
    </style>
</head>
<body>

    <form action="" method="post">
        <h1> Adivina el número</h1>
        <h2>Del 1 al 10</h2>
        <input type="number" name="adnum" min="1" max="10" required>
        <br>
        <button type="submit">Verificar</button>

        <div class="resultado">
        <?php
        session_start();

        if (!isset($_SESSION["a"])) {
            $_SESSION["a"] = rand(1, 10);
        }

        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["adnum"])) {
            $num = intval($_POST["adnum"]);

            if ($num === $_SESSION["a"]) {
                echo "¡Felicidades! Adivinaste el número: {$_SESSION['a']}";
                unset($_SESSION["a"]); 
            } else {
                echo " No era $num. Inténtalo de nuevo.";
               
            }
        }
        ?>
        </div>
    </form>

</body>
</html>
