<?php

$a = 9;
$b = 4;

$luas_a = $a*a*a;
$luas_b = $b*b*b;

function hitung_luas_kubus($sisi_kubus){
    $luas = $sisi_kubus*$sisi_kubus*$sisi_kubus;
    return $luas;
}

echo($luas_a+$luas_b);

$luas_kubus_1 = hitung_luas_kubus($a);