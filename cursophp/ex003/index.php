<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // Numeros e letras antes do número é:
        // 0x = hexadecimal 0b = binário 0 = octal
        $num = 010;
        echo "O valor da variável é $num<br>";

        $v = "Júnior";
        var_dump($v); // var_dump mostra o tipo primitivo

        $casado = false;
        var_dump($casado);

        $vet = [6, 2, 5, "Maria", 3, false];
        var_dump($vet);

        class Pessoa{
            private string $nome;
        };

        $pess = new Pessoa;
        var_dump($pess);
    ?>   
</body>
</html>