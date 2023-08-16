<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <?php 
        $salario = $_GET["salario"] ?? 0;
        $minimo = 1380;
        $quant = (int) ($salario / $minimo);
        $resto = ($salario % $minimo);
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="idSal">Salário (R$)</label>
            <input type="number" name="salario" id="idSal" step="0.01">
            <input type="submit" value="Calcular">
            <p>Considerando o salário mínimo de <strong>R$ 1.380,00</strong></p>
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
            echo "<p>Quem recebe um salário de R$ " . number_format($salario, 2, ',', '.') . " ganha <strong>$quant salários mínimos</strong> + R$ " . number_format($resto, 2, ',', '.') ."</p>";
        ?>
    </section>
</body>
</html>