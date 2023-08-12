<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <section>
        <?php
            $num = $_GET["num"] ?? 0;
            $ant = $num - 1;
            $suc = $num + 1;
            echo "<p>O número escolhido foi <strong>$num</strong>\n</p>";
            echo "<p>O seu <i>antecessor</i> é $ant\n</p>";
            echo "<p>O seu <i>sucessor</i> é $suc\n</p>"
        ?>
        <a href="index.html"><input type="button" value="← Voltar"></a>
    </section>
</body>
</html>