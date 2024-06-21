<?php

// Memuat semua file yang dibutuhkan
require_once 'Hewan.php';
require_once 'StrategiBergerak.php';
require_once 'BergerakDenganBerjalan.php';
require_once 'BergerakDenganTerbang.php';
require_once 'HewanStrategi.php';
require_once 'KucingStrategi.php';
require_once 'BurungStrategi.php';

// Tes implementasi
function main() {
    $kucing = new KucingStrategi();
    $burung = new BurungStrategi();

    $kucing->tampilkan();
    $kucing->setStrategiBergerak(new BergerakDenganBerjalan());
    $kucing->bergerak(); // Output: Bergerak dengan berjalan

    $burung->tampilkan();
    $burung->setStrategiBergerak(new BergerakDenganTerbang());
    $burung->bergerak(); // Output: Bergerak dengan terbang


}

main();
?>
