<?php

    class img_models{
        
        private $id;
        private $descripicion;
        private $ruta;
        private $url;


        public function __construct($id,$descripicion,$ruta,$url){

            $this->id=$id;
            $this->descripicion=$descripicion;
            $this->ruta=$ruta;
            $this->url=$url;

        }

        public function setId($id){
            $this->id=$id;
        }
        public function setDescripcion($descripicion){
            $this->descripicion=$descripicion;
        }
        public function setRuta($ruta){
            $this->ruta=$ruta;
        }
        public function setUrl($url){
            $this->url=$url;
        }
        public function getId(){
            return $this->id;
        }
        public function getDescripcion(){
            return $this->descripicion;
        }
        public function getRuta(){
            return $this->ruta;
        }
        public function getUrl(){
            return $this->url;
        }

    }

?>