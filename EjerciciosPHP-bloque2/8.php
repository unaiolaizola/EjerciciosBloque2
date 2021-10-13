<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <form>
        <p>Archivo: <input type="text" name="archivo"></p><input type="submit" value="Enviar">
    </form>

    <?php
        class Ejercicio8{

            function existe(){
                if(file_exists($_GET["arhivo"])){
                    echo "El archivo ".$_GET["arhivo"]." existe";
                }
                else{
                    echo "El archivo ".$_GET["arhivo"]." no existe";
                }
            }
        }

        if(isset($_GET["archivo"])){
            $o=new Ejercicio8();

        }
    ?>
</body>
</html>