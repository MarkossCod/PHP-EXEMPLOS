<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Nome e Idade</title>
</head>
<body>

<?php
// Verifica se o formulário foi enviado
if (isset($_POST['nome']) && isset($_POST['idade'])) {
    $nome = $_POST['nome'];  
    $idade = $_POST['idade']; 

    echo "<h2>Olá, $nome! Você tem $idade anos.</h2>";
} else {
    // Exibe o formulário
    echo '
    <form method="post">
        <label>Digite seu nome:</label>
        <input type="text" name="nome" required><br><br>

        <label>Digite sua idade:</label>
        <input type="number" name="idade" required><br><br>

        <button type="submit">Enviar</button>
    </form>
    ';
}
?>

</body>
</html>