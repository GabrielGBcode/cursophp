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
        $ano = $_GET["ano"] ?? date("Y");
        $nasc = $_GET["nascimento"] ?? $ano - 18;
        $idade = $ano - $nasc;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="idNasc">Em que ano você nasceu?</label>
            <input type="number" name="nascimento" id="idNasc" value="<?=$nasc?>">
            
            <label for="idAno">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$ano?></strong>)</label>
            <input type="number" name="ano" id="idAno" value="<?=$ano?>">

            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado</h2>
        <?php 
           echo "<p>Quem nasceu em $nasc, vai ter <strong>$idade anos</strong> em $ano!</p>";
        ?>
    </section>
</body>
</html>