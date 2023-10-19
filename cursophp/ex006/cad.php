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
            $num = $_GET["numero"] ?? "Sem número";
            $sucessor = $num + 1;
            $antecessor = $num - 1;

            echo "O número escolhido foi $num<br>";
            echo "O seu antecessor é $antecessor<br>";
            echo "O seu sucessor é $sucessor<br>";
        ?>
        <a href="index.html">Voltar</a>
    </main>
</body>
</html>