<!DOCTYPE html>
<html>
<head>
    <title>Lista de Nomes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fafafa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #ffffff;
            padding: 25px 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 280px;
            text-align: center;
        }

        h1 {
            font-size: 22px;
            color: #333333;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        li {
            font-size: 16px;
            color: #555555;
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }

        li:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Lista de Nomes</h1>

    <?php
    $nomes = ["Ana", "Bruno", "Carlos"];

    echo "<ul>";
    foreach ($nomes as $nome) {
        echo "<li>" . htmlspecialchars($nome) . "</li>";
    }
    echo "</ul>";
    ?>
</div>

</body>
</html>