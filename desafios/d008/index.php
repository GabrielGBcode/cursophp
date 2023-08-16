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
        $num = $_GET["numero"] ?? 0;
        $quad = number_format($num ** (1/2), 3);
        $cub = number_format($num ** (1/3), 3);
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="idNum">Número</label>
            <input type="number" name="numero" id="idNum">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
           echo "<p>Analisando o número $num, temos:</p>";
           echo "<ul><li>A sua raiz quadrada é <strong>$quad</strong></li>";
           echo "<li>A sua raiz cúbica é <strong>$cub</strong></li></ul>";
        ?>
    </section>
</body>
</html>