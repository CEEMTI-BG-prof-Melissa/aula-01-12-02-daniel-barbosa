<html>
    <head>
        <title> Aula06.php </title>
    </head>
    <body>
        <?php 

        $a=2;
        $b=$a+5;

        echo"A e igual a $a e B é igual a: $b.";
        echo"<br><br>";

        $a=$a+3;
        echo"Agora A é igual a: $a.";

        $b+=8;
        echo"<br><br>";

        $b-=5;
        echo"agora B é igual a: $b.";
        
        echo"<br><br>";
        
        echo"<hr>";

        echo"<br>";

        $b*=2;
        echo"A multiplicação de B por 2 é igual a: $b.";
        echo"<br><br>";

        $b/=10;
        echo"A divisão de B por 10 fica igual a: $b.";
        echo"<br><br>";
    

        $b%=3;
        echo"O resto da divisão de B dividido por 3 e igual a: $b.";
        echo"<br><br>";

        $b.=10;
        echo"Concatenando o valor de B com o número 10 fic igual a: $b.";


        ?>
    </body> 
</html>
