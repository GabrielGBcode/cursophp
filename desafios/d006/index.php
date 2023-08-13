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
        $dividendo = $_GET["dividendo"] ?? 0;
        $divisor = $_GET["divisor"] ?? 0;
        $resto = $dividendo % $divisor;
        $quociente = number_format($dividendo / $divisor, 0);
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="idDividendo">Dividendo</label>
            <input type="number" name="dividendo" id="idDividendo" value="<?= $dividendo ?>">
            <label for="idDivisor">Divisor</label>
            <input type="number" name="divisor" id="idDivisor" value="<?= $divisor ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php 
            echo "<p>Dividendo: <strong>$dividendo</strong></p>";
            echo "<p>Divisor: <strong>$divisor</strong></p>";
            echo "<p>Resto: <strong>$resto</strong></p>";
            echo "<p>Quociente: <strong>$quociente</strong></p>";
        ?>
    </section>
</body>
</html>