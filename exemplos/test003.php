<?php 

    $abs = abs(-2000);
    echo "a resposta é: ".$abs." -> Rertorna valor absoluto\n";

    $bc = base_convert(254, 10, 8);
    echo "a resposta é: ".$bc." -> Convertor de bases\n";

    $ceil = ceil(9.5);
    echo "a resposta é: ".$ceil." -> Arredonda pra cima (valor: 9.5)\n";
    
    $floor = floor(9.5);
    echo "a resposta é: ".$floor." -> Arredonda pra baixo (valor: 9.5)\n";

    $round = round(9.5);
    echo "a resposta é: ".$round." -> Arrendodamento Aritimético (valor: 9.5)\n";

    $hypot = hypot(3, 4);
    echo "a resposta é: ".$hypot." -> Hipotenusa\n";

    $intdiv = intdiv(5, 2);
    echo "a resposta é: ".$intdiv." -> Divisão Inteira\n";

    $min = min(5, 2, 4, 1, 0, 6, 8, 2);
    echo "a resposta é: ".$min." -> Menor número\n";

    $max = max(5, 2, 4, 1, 0, 6, 8, 2);
    echo "a resposta é: ".$max." -> Maior número\n";

    $pi = pi() or M_PI;
    echo "a resposta é: ".$pi." -> Pi\n";

    $sqrt = sqrt(81);
    echo "a resposta é: ".$sqrt." -> Raíz Quadrada\n"

?>