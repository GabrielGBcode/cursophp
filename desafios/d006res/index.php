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
        $divisor = $_GET["divisor"] ?? 1;
        $resto = $dividendo % $divisor;
        $quociente = (int)  ($dividendo / $divisor);
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="idDividendo">Dividendo</label>
            <input type="number" name="dividendo" id="idDividendo" value="<?= $dividendo ?>">
            <label for="idDivisor">Divisor</label>
            <input type="number" name="divisor" id="idDivisor" min="1" value="<?= $divisor ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
        <!-- <?php 
            echo "<ul>";
            echo "<li>Dividendo: $dividendo</li>";
            echo "<li>Divisor: $divisor</li>";
            echo "<li>Resto: $resto</li>";
            echo "<li>Quociente: $quociente</li>";
            echo "</ul>"; 
        ?> -->
    </section>
</body>
</html>