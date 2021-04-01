<?php 
    class Bola{
        private $d;
        private $r;
        private $l;
        private $v;

        public function set_diameter($value){
            $this->d = $value;
            $this->r = $this->d/2;
        }

        public function get_diameter(){
            return $this->d;
        }

        public function hitung_luas(){
            $this->l = 4*3.14*pow($this->r,2) ;
        }

        public function get_luas(){
            return $this->l;
        }

        public function hitung_volume(){
            $this->v = (4/3)*3.14*pow($this->r,3);
        }

        public function get_volume(){
            return $this->v;
        }
    }
?>