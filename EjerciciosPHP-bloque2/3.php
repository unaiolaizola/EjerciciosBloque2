<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        class Ejercicio3{

            private $array=[];

            function __construct($array){
                $this->array=$array;
                sort($this->array);
            }
            

            function mostrar(){
                echo "<span style='color:green'>"."El numero mas pequeño del array es: ".$this->array[0]."</span><br>";
                echo "<span style='color:red'>"."El numero mas grande del array es: ".$this->array[19]."</span><br>";
                $suma=0;
                for($i=0;$i<count($this->array);$i++){
                    $suma+=$this->array[$i];
                }
                echo "La suma del array es: $suma <br>";
                echo "La media de los numeros es: ".$suma/20;
            }
        }

        $array=[];
        for($i=0;$i<20;$i++){
            $array[$i]=rand(0,20);
        }

        $o=new Ejercicio3($array);
        $o->mostrar();
    ?>
</body>
</html>