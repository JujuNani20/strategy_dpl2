<?php

// Memuat semua file yang dibutuhkan
require_once 'Kendaraan.php';
require_once 'Motor.php';
require_once 'Mobil.php';
require_once 'Sepeda.php';
require_once 'Stasiun.php';
require_once 'StasiunPusat.php';

// Tes implementasi
function main() {
    $stasiun = new StasiunPusat();

    $stasiun->tampilkan();
    $stasiun->setKendaraan(new Motor());
    $stasiun->berangkatKeStasiun(); 

    $stasiun->setKendaraan(new Mobil());
    $stasiun->berangkatKeStasiun(); 

    $stasiun->setKendaraan(new Sepeda());
    $stasiun->berangkatKeStasiun(); 
}

main();
?>
