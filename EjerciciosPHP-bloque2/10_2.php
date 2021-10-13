<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php

    require("10_1.php");
    class User extends Persona{
        private $puntos;

        public function setPuntos($puntos){
            $this->puntos=$puntos;
        }
        
        public function getPuntos(){
            return $this->puntos;
        }

        public function nombreCompleto(){
            return "Usuario: ".parent::getNombre()." ".parent::getApellido()."<br>";
        }

        public function menosPuntos(){
            if($this->puntos<100){
                echo "Tienes menos de 100 puntos";
            }
        }
    }
        
    $o=new User(1111,"Unai","Olaizola");
    $o->setPuntos(50);
    echo $o->nombreCompleto();
    $o->menosPuntos();    
        

    ?>
</body>
</html>