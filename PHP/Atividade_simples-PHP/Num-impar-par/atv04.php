<!DOCTYPE html>
<html>
<head>
    <title>Verificador Par ou Ímpar</title>
    <link rel="stylesheet" type="text/css" href="atv04.css">
</head>
<body>

<div class="verificador">
    <h1>Par ou Ímpar</h1>

    <?php
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];

        if ($numero % 2 == 0) {
            echo "<h2>O número $numero é Par.</h2>";
        } else {
            echo "<h2>O número $numero é Ímpar.</h2>";
        }
    }
    ?>

    <form method="post">
        <input type="number" name="numero" placeholder="Digite um número" required
        <?php if(isset($_POST['numero'])) echo "value='" . $_POST['numero'] . "'"; ?>><br>
        <button type="submit">Verificar</button>
    </form>
</div>

</body>
</html>