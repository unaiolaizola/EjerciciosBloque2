<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php
        
        class Ejercicio6{
            private $meses=[];
            private $num;
            function __construct(){
                $this->meses["enero"]="";
                $this->meses["febrero"]="";
                $this->meses["marzo"]="";
                $this->meses["abril"]="";
                $this->meses["mayo"]="";
                $this->meses["junio"]="";
                $this->meses["julio"]="";
                $this->meses["agosto"]="";
                $this->meses["septiembre"]="";
                $this->meses["octubre"]="";
                $this->meses["noviembre"]="";
                $this->meses["diciembre"]="";
            }

            function añadir($nombre,$mes){
                $this->meses[$mes]=$this->meses[$mes].$nombre.",";
                $this->num++;  
                echo "<span style='color:blue'>".$mes.": "."</span>".$this->meses[$mes]."<br>";   
            }

            function registrados(){
                echo "Numero de personas registradas: ".$this->num;
            }
            
        }

        $o=new Ejercicio6();
        $o->añadir("unai","febrero");
        $o->añadir("unai2","marzo");
        $o->añadir("unai3","marzo");
        $o->añadir("unai4","junio");
        $o->registrados();

    ?>
</body>
</html>