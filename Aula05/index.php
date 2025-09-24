<html>
    <head>
        <title> Aula 05.php </title>
    </head>
    <body>
        <?php
           $n1= 2;
           $n2= $_GET["x"];

           echo "Os valores informados são $n1 e $n2 <br>";
           echo  "O valor absoluto de $n2 e: " .abs($n2);
           echo "<br> o resultado de $n2 <sup>$n1</sup> e igual a: " .pow($n2,$n1);
           echo "<br>A raiz quadrada de $n2 e: " .sqrt($n2);
           echo "<br>Aredonda o Numero de $n2 e: " .Round($n2);
           echo "<br>Numero $n2 arredondado para cima  e: " .ceil($n2);
           echo "<br>Numero $n2 arredondado para baixo e: " .floor($n2);
           echo "<br>Numero $n2 Truncado e: " .intval($n2);
        
           ?>
    </body> 
</html>
