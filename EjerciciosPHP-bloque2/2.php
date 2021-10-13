<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    class Ejercicio2{
        function mostrar($num1,$num2){

            echo "<table border='1'><br />";
            for ($i = 0; $i < $num1; $i ++) {
                echo "<tr>";
                for ($j = 1; $j <= $num2; $j ++) {
                    echo "<td>a</td>";
                }
                echo "</tr>";
            }
                echo "</table>";
                    }
    }

    $o=new Ejercicio2();
    $o->mostrar(20,20);
    ?>
</body>
</html>