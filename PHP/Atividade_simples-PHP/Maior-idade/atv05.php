<!DOCTYPE html>
<html>
<head>
    <title>Verificador de Idade</title>
    <link rel="stylesheet" type="text/css" href="atv05.css">
</head>
<body>

<div class="verificador-idade">
    <h1>Maior ou Menor de Idade</h1>

    <?php
    if (isset($_POST['idade'])) {
        $idade = $_POST['idade'];

        if ($idade >= 18) {
            echo "<h2>Você é maior de idade.</h2>";
        } else {
            echo "<h2>Você é menor de idade.</h2>";
        }
    }
    ?>

    <form method="post">
        <input type="number" name="idade" placeholder="Digite sua idade" required
        <?php if(isset($_POST['idade'])) echo "value='" . $_POST['idade'] . "'"; ?>><br>
        <button type="submit">Verificar</button>
    </form>
</div>

</body>
</html>