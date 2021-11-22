<?php
        class Mahasiswa{
            public $nama;

            public function setNama($nama_baru = "NULL"){
                $this->nama = $nama_baru;
            }

            public function getNama(){
                return $this->nama;
            }
        }

?>