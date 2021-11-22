<?php
    class Manusia{
        public $alatGerak, $alatNafas, $alatBermain;

        public function setBergerak($alatGerak = 'Stroke'){
            $this->alatGerak = $alatGerak;
        }
        public function setBernafas($alatNafas = 'Paru-paru basah'){
            $this->alatNafas = $alatNafas;
        }
        public function setBermain($alatBermain = 'Gundah nichhh'){
            $this->alatBermain = $alatBermain;
        }
        public function getBergerak(){
            return $this->alatGerak;
        }
        public function getBernafas(){
            return $this->alatNafas;
        }
        public function getBermain(){
            return $this->alatBermain;
        }
    }

?>