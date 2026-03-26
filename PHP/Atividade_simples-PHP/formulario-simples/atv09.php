<?php
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["nome"]);
    if (!empty($nome)) {
        $mensagem = "Seja muito bem-vindo, $nome!";
    } else {
        $mensagem = "Por favor, digite seu nome.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Boas-vindas</title>
    <link rel="stylesheet" href="atv09.css">
</head>
<body>

<div class="container">
    <h1>Bem-vindo 👋</h1>

    <form method="POST" action="">
        <input 
            type="text" 
            name="nome" 
            placeholder="Digite seu nome" 
            required
        >
        <button type="submit">Enviar</button>
    </form>

    <?php if (!empty($mensagem)): ?>
        <p class="mensagem"><?php echo $mensagem; ?></p>
    <?php endif; ?>
</div>

</body>
</html>