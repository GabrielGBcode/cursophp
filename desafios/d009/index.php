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
        $num1 = $_GET["numero1"] ?? 0;
        $num2 = $_GET["numero2"] ?? 0;
        $peso1 = $_GET["peso1"] ?? 1;
        $peso2 = $_GET["peso2"] ?? 1;
        $mediaS = ($num1 + $num2) / 2;
        $mediaP = number_format((($num1 * $peso1) + ($num2 * $peso2)) / ($peso1 + $peso2), 2);
    ?>
    <main>
        <h1>Médias Aritiméticas</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="idNum1">1º Valor</label>
            <input type="number" name="numero1" id="idNum1" value="<?=$num1?>">
            <label for="idPeso1">1º Peso</label>
            <input type="number" name="peso1" id="idPeso1" value="<?=$peso1?>">
            
            <label for="idNum2">2º Valor</label>
            <input type="number" name="numero2" id="idNum2" value="<?=$num2?>">
            <label for="idPeso2">2º Peso</label>
            <input type="number" name="peso2" id="idPeso2" value="<?=$peso2?>">

            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section id="resultado">
        <h2>Cálculo das Médias</h2>
        <?php 
           echo "<p>Analisando os valores $num1 e $num2, temos:</p>";
           echo "<ul><li>A <strong>Média Aritimética Simples</strong> entre os valores é igual a $mediaS</li>";
           echo "<li>A <strong>Média Aritimética Ponderada</strong> com pesos $peso1 e $peso2 é igual a $mediaP</li></ul>";
        ?>
    </section>
</body>
</html>