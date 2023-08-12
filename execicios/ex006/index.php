<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício PHP</title>
</head>
<body>
    <?php 
        // Capturando os dados do Furmulário
        $valor1 = $_GET["v1"] ?? 0;
        $valor2 = $_GET["v2"] ?? 0;
    ?>
    <main>
        <h1>Somador de Valores</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="idv1">Valor 1:</label>
            <input type="number" name="v1" id="idv1" value="<?= $valor1 ?>">
            <label for="idv2">Valor 2:</label>
            <input type="number" name="v2" id="idv2" value="<?= $valor2 ?>">
            <input type="submit" value="Somar">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado da Soma</h2>
        <?php 
            $soma = $valor1 + $valor2;
            echo "<p>A some entre os valore $valor1 e $valor2 é igual a <strong>$soma</strong>.</p>"
        ?>
    </section>
</body>
</html>