<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Aleatório</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<main>
    <?php 
     $min = 0;
     $max = 100;

     $num = mt_rand(0, 100);
     // random_int() gera números aleatórios criptograficamente seguros



     echo  "Gerando um número aleatório entre $min e $max...<br>";

     echo "O número gerado foi: <strong>$num<strong>";
    
    ?>
     
    <button onclick="javascript:document.location.reload()";>&#x1F504; Gerar outro</button>

   </main>
    
</body>
</html>