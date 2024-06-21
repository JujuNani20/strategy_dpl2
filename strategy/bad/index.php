<?php

require_once 'Stasiun.php';

function main() {
    $stasiun = new Stasiun('motor');
    $stasiun->berangkatKeStasiun(); 

    $stasiun = new Stasiun('mobil');
    $stasiun->berangkatKeStasiun(); 

    $stasiun = new Stasiun('sepeda');
    $stasiun->berangkatKeStasiun(); 

    $stasiun = new Stasiun('pesawat');
    $stasiun->berangkatKeStasiun(); 
}

main();
?>
