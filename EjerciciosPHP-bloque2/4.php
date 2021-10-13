<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <form>
        <p>String: <input type="text" name="str"></p><input type="submit" value="Enviar">
    </form>

    <?php
        class Ejercicio4{
            private $str;
            function __construct($str){
                $this->str=$str;
            }

            function convertirArray(){
                $this->array=array();
                $arrayNueva=explode(" ",$this->str);
                for($i=0;$i<count($arrayNueva);$i++){
                    $this->array[$arrayNueva[$i]]=strlen($arrayNueva[$i]);
                }
                foreach ($this->array as $i=>$j){
                    echo $i." ".$j."<br>";
                }
            }

        }

        if(isset($_GET["str"])){
            $o=new Ejercicio4($_GET["str"]);
            $o->convertirArray();
        }
        
    ?>
</body>
</html>