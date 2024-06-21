<?php

abstract class Stasiun
{
    protected $kendaraan;

    public function setKendaraan(Kendaraan $kendaraan): void
    {
        $this->kendaraan = $kendaraan;
    }

    abstract public function tampilkan(): void;

    public function berangkatKeStasiun(): void
    {
        if ($this->kendaraan !== null) {
            $this->kendaraan->bergerak();
        } else {
            echo "Tidak ada kendaraan yang ditetapkan\n";
        }
    }
}
?>