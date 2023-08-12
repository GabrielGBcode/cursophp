<!DOCTYPE html>
<html lang="pt-BR">
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
            $num = $_GET["real"];
            $int = (int) $num;
            $decimal = $num - (int) $num;
            echo "<p>Analisando o número <strong>" . number_format($num, 3,",", ".") ."</strong> informado pelo usuário:</p>";
            echo "<p><ul><li>A parte inteira do número é <strong>" . $int ."</strong></li><li>A parte fracionária do número é <strong>" . number_format($decimal, 3, ",", ".") . "</strong></li></ul></p>";
        ?>
        <a href="javascript:history.go(-1)"><input type="button" value="Voltar"></a>
    </main>
</body>
</html>