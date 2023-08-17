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
        $preco = $_GET["preco"] ?? 0;
        $ajuste = $_GET["ajuste"] ?? 0;
        $aumento = $preco + (($preco * $ajuste) / 100);
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="idPreco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="idPreco" step="0.01" value="<?=$preco?>">

            <label for="idAjuste">Qual será o percentual de reajuste? <strong><span id="p">?</span>%</strong></label>
            <input type="range" name="ajuste" id="idAjuste" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$ajuste?>">
            <input type="submit" value="Reajustar">

        </form>
    </main>
    <section id="resultado">
        <h2>Resultado do Reajuste</h2>
        <?php 
           echo "<p>O produto que custava R$ $preco, com <strong>$ajuste% de aumento</strong> vai passar a custar <strong>R$ $aumento</strong> a partir de agora.</p>";
        ?>
    </section>

    <script>
        mudaValor()

        function mudaValor() {
            p.innerText = idAjuste.value;
        }
    </script>
</body>
</html>