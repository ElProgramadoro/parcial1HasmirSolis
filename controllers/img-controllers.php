<?php
require_once("models/img-models.php");
#require_once("models/img_utils.php");

    class img_controller{
        
        public static function Mostrar(){
            
            $imag[] = new img_models(1,"tortuga","../imgs/img1.jpg","muestraimagen.php?num=1");
            $imag[] = new img_models(2,"araña","../imgs/img2.jpg","muestraimagen.php?num=2");
            $imag[] = new img_models(3,"abeja","../imgs/img3.jpg","muestraimagen.php?num=3");
            $imag[] = new img_models(4,"flor","../imgs/img4.jpg","muestraimagen.php?num=4");
            $imag[] = new img_models(5,"manzana","../imgs/img5.jpg","muestraimagen.php?num=5");
            $imag[] = new img_models(6,"buda","../imgs/img6.jpg","muestraimagen.php?num=6");
            $imag[] = new img_models(7,"gato","../imgs/img7.jpg","muestraimagen.php?num=7");
            $imag[] = new img_models(8,"pez argentino","../imgs/img8.jpg","muestraimagen.php?num=8");
            $imag[] = new img_models(9,"nutria","../imgs/img9.jpg","muestraimagen.php?num=9");


            return $imag;
        }
    }

?>