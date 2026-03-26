<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Loop While em PHP</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .box {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
            text-align: center;
            width: 250px;
        }

        h1 {
            margin-bottom: 15px;
            color: #333;
        }

        p {
            font-size: 18px;
            margin: 5px 0;
            color: #555;
        }
    </style>
</head>
<body>

<div class="box">
    <h1>Contagem em loop</h1>

    <?php
        $i = 1;

        while ($i <= 5) {
            echo "<p>Número: $i</p>";
            $i++;
        }
    ?>

</div>

</body>
</html>