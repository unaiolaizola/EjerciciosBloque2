<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form>
        <p>Lado: <input type="text" name="lado"></p><input type="submit" value="Enviar">
    </form>

    <?php

    class Ejercicio9{

        function calcular($lado){
            try{
                if($lado<0){
                    throw new Exception();
                }
                else{
                    $respuesta=$lado*$lado;
                    echo "El area del cuadrado es: ".$respuesta."<br>";
                }
            }catch (Exception $e) {
                echo "No puedes meter un numero negativo";
            }
        }
    }

    if(isset($_GET["lado"])){
        $o=new Ejercicio9();
        $o->calcular($_GET["lado"]);
    }

    $array=[];
    for($i=0;$i<4;$i++){
        $numero=rand(1, 50);
        $array[$i]=$numero;
    }
    $array[4]=rand(-50,-1);

    $o2=new Ejercicio9();
    for($i=0;$i<count($array);$i++){
        $o2->calcular($array[$i]);
    }
    
    ?>

</body>
</html>