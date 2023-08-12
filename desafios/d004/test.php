<?php 

    # Cotação Atual
    $cotacao = 4.89;

    # Quantos R$ você tem?
    $real = 1000;

    $dolar = $real / $cotacao;

    # Formatação de moedas com internacionalização!
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
?>