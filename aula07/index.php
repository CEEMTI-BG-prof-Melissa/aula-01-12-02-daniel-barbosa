<html>
    <head>
        <title>aula 07 - php</title>
    </head>
    <body>
        <h3> Operadores de atribuição </h3>
    <?php
        // Aula 07
        // Daniel Barbosa 
        // 08/10/2025

        $numero = 10;
        echo "<br> O valor inicial e;  $numero";

        // Soma 5
        $numero += 5;
        echo "<br> Apos somar5: $numero";

        // Subtrai 2
        $numero -= 2; 
        echo "<br> Apos Subtrair 2: $numero";

        // Multiplica por 3
        $numero *= 3; 
        echo "<br> Apos multiplicar por 3: $numero";

        // Divide por 2
        $numero /= 2; 
        echo "<br> Apos dividir por 2: $numero";

        // Aumenta o valor antes de usar
        ++$numero;
        echo "<br><br>Pré-incremento: ".$numero;
        echo "<br>";
    
        // Mostra o valor, depois aumenta
        echo "Pós-incremento: ".$numero;
        echo "<br>";
        $numero++;

        // Diminui o valor antes de usar
        --$numero;
        echo "Pré decremento: ".$numero;
        echo "<br>";

        // Mostra o valor, depois diminui
        echo "Pós decremento: ".$numero;
        echo "<br>";
        $numero--;

        //mostra o valor final
        echo "<br><br>O valor final é: ".$numero;

    ?>
    </body>
</html>
