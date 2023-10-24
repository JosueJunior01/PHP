<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Documento PHP</title>
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <?php 
            $real = $_GET["numero"];
            $numFloat = (float) $real;
            $conversor = number_format($numFloat / 5.06, 2, ',','.');

            echo "Seus R$ $real equivalem a US$ $conversor<br>";

            echo "<strong>Cotação fixa de R$5,06</strong> informada diretamente no código"
        ?>
        <a href="index.html">Voltar</a>
    </main>
</body>
</html>