<?php

// Memuat semua file yang dibutuhkan
require_once 'Hewan.php';
require_once 'Kucing.php';
require_once 'Burung.php';

// Tes implementasi
function main() {
    $kucing = new Kucing();
    $burung = new Burung();

    $kucing->tampilkan();
    $kucing->bergerak(); // Output: Kucing bergerak dengan berjalan

    $burung->tampilkan();
    $burung->bergerak(); // Output: Burung bergerak dengan terbang
}

main();
?>
