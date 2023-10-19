<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gerando números aleatórios</title>
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php 
            $numeroAleatorio = rand(0, 100);
            echo "O valor gerado foi <strong>$numeroAleatorio</strong>";
        ?>
        <a href="JavaScript:location.reload(true);">
Gerar outro
</a>
    </main>
</body>
</html>