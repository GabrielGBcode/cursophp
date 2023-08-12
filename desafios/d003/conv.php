<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php
            $din = $_GET["conv"];
            $conv = $din / 4.90;
            $dol = number_format($conv, 2, ",");
            echo "<p>Seus <strong>R$ " . number_format($din, 2, ',', '.') . "</strong> equivalem a <strong>US$ $dol</strong></p>";
            echo "<strong>*Cotação fixa de R$4,90</strong> informada diretamente no código.";
        ?>
        <a href="javascript:history.go(-1)"><input type="button" value="Voltar"></a>
    </main>
</body>
</html>