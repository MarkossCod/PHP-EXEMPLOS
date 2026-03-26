<!DOCTYPE html>
<html>
<head>
    <title>Calculadora PHP</title>
    <link rel="stylesheet" type="text/css" href="atv03.css">
</head>
<body>

<div class="calculadora">
    <h1>Calculadora Simples</h1>

    <?php
    if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['operacao'])) {
        $num1 = $_POST['numero1'];
        $num2 = $_POST['numero2'];
        $operacao = $_POST['operacao'];
        $resultado = '';

        switch ($operacao) {
            case 'somar':
                $resultado = $num1 + $num2;
                break;
            case 'subtrair':
                $resultado = $num1 - $num2;
                break;
            case 'multiplicar':
                $resultado = $num1 * $num2;
                break;
            case 'dividir':
                $resultado = ($num2 != 0) ? $num1 / $num2 : 'Erro: divisão por zero!';
                break;
            default:
                $resultado = 'Operação inválida';
        }

        echo "<h2>Resultado: $resultado</h2>";
    }
    ?>

    <form method="post">
        <input type="number" step="any" name="numero1" placeholder="Número 1" required><br>
        <input type="number" step="any" name="numero2" placeholder="Número 2" required><br>
        <select name="operacao" required>
            <option value="somar">Somar (+)</option>
            <option value="subtrair">Subtrair (-)</option>
            <option value="multiplicar">Multiplicar (×)</option>
            <option value="dividir">Dividir (÷)</option>
        </select><br>
        <button type="submit">Calcular</button>
    </form>
</div>

</body>
</html>