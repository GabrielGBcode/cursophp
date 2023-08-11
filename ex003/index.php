<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>
<body>
    <?php 
      // $num = 0x1A; || 0x HEXADECIMAL
      // $num = 0b1000; || 0b BINÁRIO
      // echo "O valor da variável é $num";

      // $v = "Gabriel";
      // var_dump($v);

      // $num = (int) 3e2; # 3 x 10(2)
      // echo "O valor é $num ";
      // var_dump($num);

      // $num = (float) "950";
      // var_dump($num);

      // $casado = true;
      // var_dump($casado);
      // echo "O valor para casado é $casado";

      // $vet = [6, 3.5, "Gabriel", "3", false];
      // var_dump($vet);

      class Pessoa {
        private string $nome;
      }

      $p = new Pessoa;
      var_dump($p);

    ?>
</body>
</html>