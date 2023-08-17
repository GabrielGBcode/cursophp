<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
    <style>
        img.nota {
            height: 65px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $saque = $_GET["valor"] ?? 0;
        $cem = (int) ($saque / 100);
        $resto = $saque % 100;
        $cinq = (int) ($resto / 50);
        $resto = $resto % 50;
        $vint = (int) ($resto / 20);
        $resto = $resto % 20;
        $dez = (int) ($resto / 10);
        $resto = $resto % 10;
        $cinc = (int) ($resto / 5);
        $resto = $resto % 5;
        $dois = (int) ($resto / 2);
        $resto = $resto % 2;
        $real = $resto;

    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="idValor">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="valor" id="idValor" value="<?=$saque?>" step="1">
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section id="resultado">
        <h2>Saque de R$ <?=$saque?> realizado</h2> 
        <?php 
            echo "<p>O caixa eletrônico vai te entregar as seguintes notas:</p>";
            echo "<ul>";
            echo "<li><img src=\"img/100-reais.jpg\" alt=\"Nota de Cem reais\" class=\"nota\"> <strong>x$cem</strong></li>";
            echo "<li><img src=\"img/50-reais.jpg\" alt=\"Nota de Cinquenta reais\" class=\"nota\"> <strong>x$cinq</strong></li>";
            echo "<li><img src=\"img/20-reais.jpg\" alt=\"Nota de Vinte reais\" class=\"nota\"> <strong>x$vint</strong></li>";
            echo "<li><img src=\"img/10-reais.jpg\" alt=\"Nota de Dez reais\" class=\"nota\"> <strong>x$dez</strong></li>";
            echo "<li><img src=\"img/5-reais.jpg\" alt=\"Nota de Cinco reais\" class=\"nota\"> <strong>x$cinc</strong></li>";
            echo "<li><img src=\"img/2-reais.jpg\" alt=\"Nota de Dois reais\" class=\"nota\"> <strong>x$dois</strong></li>";
            echo "<li><img src=\"img/1-real.jpg\" alt=\"Moeda de um reai\" class=\"nota\"> <strong>x$real</strong></li>";
            echo "</ul.";
        ?>
    </section>
</body>
</html>