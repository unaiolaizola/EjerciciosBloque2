<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <form>
        <p>Base: <input type="text" name="base"></p>
        <p>Exponente: <input type="text" name="exponente"></p><input type="submit" value="Enviar">
    </form>

    <?php
        class Ejercicio7{

            function calcular(){
                if($_GET["exponente"]==null){
                    echo "Potencia: ".pow($_GET["base"],2);
                }
                else{
                    echo "Potencia: ".pow($_GET["base"],$_GET["exponente"]);
                }
                
            }
        }

        if(isset($_GET["base"])){
            $o=new Ejercicio7();
            $o->calcular();
        }
    ?>
</body>
</html>