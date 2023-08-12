<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style.css" />
    <title>Desafio 02</title>
  </head>
  <body>
    <header>
      <h1>Trabalhando com número aleatórios</h1>
    </header>
    <main>
      <h1>Trabalhando com número aleatórios</h1>
      <p>Gerando um número aleatório entre 0 e 100...</p>
      <p>O valor gerado foi <strong>
        <?php 
          $num = rand(0, 100);
          echo "$num";
        ?>
      </strong></p>

      <input type="button" value="🔃 Gerar outro" onclick="javascript:document.location.reload()"/>
    </main>
    
  </body>
</html>
