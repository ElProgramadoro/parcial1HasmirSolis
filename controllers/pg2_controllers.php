<?php

require_once("models/pg2_models.php");

    class pg2_controllers{

        public function Mostrar(){

            $var[] = new pg2_models(pg2_models::getUsuario(),"golADASDx");
            return $var;

        }

    }

?>