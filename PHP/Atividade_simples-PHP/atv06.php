<!DOCTYPE html>
<html>
<head>
    <title>Contagem de 1 a 10</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .contagem {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            text-align: center;
            width: 200px;
        }
        h1 {
            margin-bottom: 20px;
            color: #333;
        }
        p {
            font-size: 18px;
            color: #0066cc;
        }
    </style>
</head>
<body>

<div class="contagem">
    <h1>Contagem de 1 a 10</h1>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<p>$i</p>";
    }
    ?>
</div>

</body>
</html>