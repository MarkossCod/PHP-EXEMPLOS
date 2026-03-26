<!DOCTYPE html>
<html>
<head>
    <title>Saudação Personalizada</title>
    <link rel="stylesheet" href="atv08.css">
</head>
<body>

<div class="container">
    <h1>Digite seu nome</h1>

    <?php
    if (isset($_POST['nome']) && trim($_POST['nome']) !== '') {
        $nome = htmlspecialchars(trim($_POST['nome']));
        echo "<div class='mensagem'>Olá, $nome! Seja bem-vindo(a)!</div>";
    }
    ?>

    <form method="post">
        <input type="text" name="nome" placeholder="Seu nome aqui" required
        <?php if (isset($_POST['nome'])) echo "value='" . htmlspecialchars($_POST['nome']) . "'"; ?>>
        <br>
        <button type="submit">Enviar</button>
    </form>
</div>

</body>
</html>