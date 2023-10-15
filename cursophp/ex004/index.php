<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Strings com PHP</title>
</head>
<body>
    <?php 
        /*
             ESCAPE SEQUENCES
         \n - Nova Linha
         \t - Tabulação Horizontal
         \\ - Barra Invertida
         \$ - Sinal de cifrão
         \u{} - Codepoint Unicode
         \" - Aspas duplas
        */

        // EXEMPLO SINGLE QUOTE
        $nome = "Josué";
        $sobrenome = "Júnior";
        $apelido = "Pingú";

        echo '$nome $sobrenome \"$apelido\"';

        // EXEMPLO DOUBLE QUOTE
        $nome = "Josué";
        $sobrenome = "Júnior";
        $apelido = "Pingú";

        echo "$nome $sobrenome \"$apelido\"";

        // EXEMPLO SRING HEREDOC    
        $curso = "PHP";
        $ano = date('Y');

        echo <<< TESTE
            Olá galera do curso $curso
        Tudo bem com vocês? Como está sendo o ano de $ano?
        TESTE;

        // EXEMPLO STRING NOWDOC
        $curso = "PHP";
        $ano = date('Y');

        echo <<< 'TESTE'
            Olá galera do curso $curso
        Tudo bem com vocês? Como está sendo o ano de $ano?
        TESTE;
    ?>
</body>
</html>