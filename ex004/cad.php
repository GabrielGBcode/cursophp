<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php
            $nome = $_GET["nome"]  ?? "sem nome";
            $sobrenome = $_GET["sobrenome"] ?? "desconhecido";

            echo "<p>Olá, <strong>$nome $sobrenome</strong>, como vai?</p>"
        ?>
        <!-- <p><a href="javascript:history.go(-1)">Voltar</a></p> -->
        <p><a href="index.html">Voltar</a></p>
    </main>
</body>
</html>