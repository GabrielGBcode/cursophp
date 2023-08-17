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
        $segundos = $_GET["seg"] ?? 0;
        // 1s = 604800seg
        // $sem = (int) ($segundos / 60 / 60 / 24 / 7);
        $sem = (int) ($segundos / 604800);
        $resto = $segundos % 604800;

        // 1d = 86400seg
        // $dia = (int) ($resto / 60 / 60 / 24 );
        $dia = (int) ($resto / 86400);
        $resto = $resto % 86400;

        // 1h = 3600seg
        // $hor = (int) ($resto / 60 / 60);
        $hor = (int) ($resto / 3600);
        $resto = $resto % 3600;

        // 1m = 60seg
        // $min = (int) ($resto / 60);
        $min = (int) ($resto / 60);
        $resto = $resto % 60;

        // segundos
        $seg = $resto;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="idSeg">Qual é o total de segundos?</label>
            <input type="number" name="seg" id="idSeg" value="<?=$segundos?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>Totalizando tudo</h2>
        <?php 
            echo "<p>Analisando o valor que você digitou, <strong>" . number_format($segundos, 0, '', '.') . " segundos</strong> equivalem a um total de:</p>";
            echo "<ul><li>$sem semanas</li>";
            echo "<li>$dia dias</li>";
            echo "<li>$hor horas</li>";
            echo "<li>$min minutos</li>";
            echo "<li>$seg segundos</li></ul>";
        ?>
    </section>
</body>
</html>