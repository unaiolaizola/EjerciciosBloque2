<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        class Ejercicio5{
            
            function mostrar(){
                $meses=["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
                $dias=[31,28,31,30,31,30,31,31,30,31,30,31,];
                echo "<table border='1'><br />";
                echo "<tr>";
                for($i=0;$i<count($meses);$i++){
                    echo "<td>".$meses[$i]."</td>";
                }
                echo "</tr>";
                echo "<tr>";
                for($i=0;$i<count($dias);$i++){
                    echo "<td>".$dias[$i]."</td>";
                }
                echo "</tr>";
                echo "</table>";
            }
        }
        $o=new Ejercicio5();
        $o->mostrar();
    ?>
</body>
</html>