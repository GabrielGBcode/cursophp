<?php 
    // STRING ASPAS DUPLAS (aceita formatação)
    
    // $code = "mundo";
    // echo "Olá, $code!"; # -> Olá, Mundo!

    //--------------------------------------------

    // STRING ASPAS SIMPLES (não aceita formatação)

    // $code = "mundo";
    // echo 'Olá, $code!'; # -> Olá, $code!
    // echo 'Olá, ' . $code . "!"; # -> Olá, mundo!

    //--------------------------------------------

    // STRING HEREDOC (Aceita formatação)

    // $curso = "PHP";
    // $ano = date("Y");
    // echo <<< FRASE
    //     Estou estudando
    //         $curso em $ano
    // FRASE;
    
    //--------------------------------------------

    // STRING NOWDOC (Não aceita formatação)

    // $curso = "PHP";
    // $ano = date("Y");
    // echo <<< 'FRASE'
    //     Estou estudando
    //         $curso em $ano
    // FRASE;
?>