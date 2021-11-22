<?php
include('typedata2.php');

$manusia = new Manusia();

$manusia->setBergerak();
$manusia->setBernafas();
$manusia->setBermain();

echo "Pergerakan: " . $manusia->getBergerak() .  "<br>";
echo "pernapasan: " . $manusia->getBernafas() .  "<br>";
echo "ngapain: " . $manusia->getBermain() . "<br>";
echo "<br><br>=======================================================<br>";

echo "<br> <br>";
if ($manusia->getBergerak() == "Stroke") {
    if ($manusia->getBernafas() == "Paru-paru basah") {
        if ($manusia->getBermain() == "Gundah nichhh") {
            echo "Kesimpulan: <br>Ini orang keknya udah mati";
        }
        else{
            echo "Kesimpulan: <br> ada orang sedang " . $manusia->getBergerak() . ", tadi aku lihat " . $manusia->getBernafas() . ", tapi dia sedang " . $manusia->getBermain();
        }
    }
    else{
        echo "Kesimpulan: <br> ada orang sedang " . $manusia->getBergerak() . ", tadi aku lihat " . $manusia->getBernafas() . ", tapi dia sedang " . $manusia->getBermain();
    }
} else {

    echo "Kesimpulan <br> ada orang sedang " . $manusia->getBergerak() . ", tadi aku lihat " . $manusia->getBernafas() . ", tapi dia sedang " . $manusia->getBermain();
}
