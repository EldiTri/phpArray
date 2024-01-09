<?php
// $cars = array("TOYOTA","MITSUBISHI","FUSO");
// $negara = ["singapura", "Indonesia", "Jepang"];
// $kota = array("singaparna", "Indramayu", "Jepara");

// echo"I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
// echo"<br>";
// var_dump($negara);
// echo"<br>";
// print_r($kota)





$nomor=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
foreach($nomor as $angka){
    if ($angka % 2 != 0 )
    echo $angka;
    echo "<br>";
}



?>
