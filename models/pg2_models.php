<?php
require_once("utils/pg2_utils.php");
    class pg2_models{
        private $usuario;
        private $password;

        public function Mostrar()
        {
            $objeto=new encry();
            $usu=$this->usu;                      
            return "usuario cifrado: <br>".$objeto->base64($usu) ."<br> contraseña cifrada: " .$objeto->Md5($this->pass);
        }

        public function setUsuario($usuario){
            $this->usu=$usuario;
        }

        public function setPass($password){
            $this->pass=$password;
        }

        public function getUsuario(){
            return $this->usu;
        }

        public function getPass(){
            return $this->pass;
        }

    }

?>