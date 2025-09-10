<html>
    <head>
        <title> Aula 03 </title>
    </head>
    <body>
        <?php
            $nome="Daniel Barbosa";
            $n1=10;
            $n2=2;

            $soma=$n1+$n2;
            
            echo "Meu nome é " .$nome;
            echo "<br>Meu nome é  $nome";
            echo "<br> <br> A soma da variavel $n1 com $n2 e igual a $soma";

            echo "<br><br> O resultado da subtração de $n1 e $n2 é igual a: ".($n1-$n2).".";
            echo "<br><br> O resulto da multiplicação de $n1 e $n2 e: ".($n1*$n2).".";
            echo "<br><br> O resultado da Divisão real de $n1 e $n2 e: ".($n1/$n2).".";
            echo "<br><br> O resultado do Resto da Divisão de $n1 e $n2 e: ".($n1%$n2).".";
            
        ?>
    </body> 
</html>
