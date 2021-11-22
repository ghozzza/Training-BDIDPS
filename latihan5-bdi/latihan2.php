<?php
// buat class prov
class prov {
  
   // buat property untuk class laptop
   var $kota;
   var $web;
   var $gub;
   var $wagub;

   //method
   
  
}
  
// buat objek dari class laptop (instansiasi)
$a = new prov();

$kotax = $a -> kota = array("Badung", "Bangli", "Denpasar");
$webx = $a ->web = array("badung.com", " ", "denpasar.com");
$gubx = $a -> gub = array("Pak badung", "Pak Bangli", "pak Denpasar"); 
$wagubx = $a ->wagub = array("Bu Badung", "Bu Bangli", "Bu Denpasar");
  
// set property
// $kotax->kota = array("Badung", "Bangli", "Denpasar");
// $webx->web = array("badung.com", " ", "denpasar.com");
// $gubx->gub = array("Pak badung", "Pak Bangli", "pak Denpasar");
// $wagubx->wagub = array("Bu Badung", "Bu Bangli", "Bu Denpasar");

//count
// $arrlength = count($kotax->kota);
$arrlength = count($a->kota);

for($x = 0; $x < $arrlength; $x++) {
    echo "nama kota: " . $a->kota[$x];
    echo "<br>";
    echo "nama web: " . $a->web[$x];
    echo "<br>";
    echo "nama Gubernur: " . $a->gub[$x];
    echo "<br>";
    echo "nama Wagub: " . $a->wagub[$x];
    echo "<br>";
    echo "<br>";
  }
// // tampilkan property
// echo $kotax->kota; 
// echo "<br />";
