<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        class Ejercicio1{
            function mostrar(){
                $numeros=[0,1,2,3,4,5,6,7,8,9];
                $factoriales=[];
                for($i=1;$i<count($numeros);$i++){
                    $factorial=1;
                    for($j=1;$j<=$numeros[$i];$j++){
                        $factorial*=$j;
                    }
                    $factoriales[$i]=$factorial;
                } 
                for($i=1;$i<=count($factoriales);$i++){
                    echo "$factoriales[$i] <br>";
                }
            }
        }
        $o=new Ejercicio1();
        $o->mostrar();
    ?>
</body>
</html>