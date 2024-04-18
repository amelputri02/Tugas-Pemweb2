
<?php
require_once('week5\class_persegipanjang.php');

function getLuas(){
    $persegipanjang = new PersegiPanjang(4,5);
    $luas = $persegipanjang->panjang * $persegipanjang->lebar;
    echo "Luas = ".$luas . PHP_EOL;
}
function getKeliling(){
    $persegipanjang = new PersegiPanjang(4,5);
    $keliling = 2*($persegipanjang->panjang+$persegipanjang->lebar);
    echo "Keliling = ". $keliling . PHP_EOL;
}

getLuas();
getKeliling();
