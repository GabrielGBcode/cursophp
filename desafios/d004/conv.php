<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio 04</title>
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php 
            $data_ini = date("m-d-Y", strtotime("-7 days"));
            $data_fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$data_ini.'\'&@dataFinalCotacao=\''.$data_fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,cotacaoVenda,dataHoraCotacao';
            
            $data = json_decode(file_get_contents($url), true);
            $cotacao = number_format($data["value"][0]["cotacaoCompra"], 2);
            $real = $_GET["conv"];
            $dol = $real / $cotacao;

            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

            echo "<p>Seus <strong>" . numfmt_format_currency($padrao, $real, "BRL") ."</strong> equivalem a <strong> " . numfmt_format_currency($padrao, $dol, "USD") ."</strong></p>";
            echo "Cotacão obtida diretamente do <a href=\"https://dadosabertos.bcb.gov.br\" target=\"_blank\"><strong>Banco Central do Brasil</strong></a>.";
            
        ?>
    <a href="javascript:history.go(-1)"><input type="button" value="Voltar"></a>
    </main>
</body>
</html>