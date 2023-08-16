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
        $saque = $_GET["valor"] ?? 0;
        $cem = 100;
        $cinq = 50;
        $dez = 10;
        $cinc = 5;

    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="idValor">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="valor" id="idValor" value="<?=$saque?>" step="5">
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section id="resultado">
        <h2>Saque de R$ <?=$saque?> realizado</h2>
        <?php 
            echo "<p>O caixa eletrônico vai te entregar as seguintes notas:</p>";
            echo "<ul><li>Nota de 100 x$cem</li>";
            echo "<li>Nota de 50 x$cinq</li>";
            echo "<li>Nota de 10 x$dez</li>";
            echo "<li>Nota de 5 x$cinc</li></ul>";
        ?>
    </section>
</body>
</html>