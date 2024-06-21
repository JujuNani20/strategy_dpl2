<?php

class Stasiun
{
    private $jenisKendaraan;

    public function __construct($jenisKendaraan)
    {
        $this->jenisKendaraan = $jenisKendaraan;
    }

    public function berangkatKeStasiun()
    {
        switch ($this->jenisKendaraan) {
            case 'motor':
                $this->naikMotor();
                break;
            case 'mobil':
                $this->naikMobil();
                break;
            case 'sepeda':
                $this->naikSepeda();
                break;
            default:
                echo "Jenis kendaraan tidak dikenal\n";
                break;
        }
    }

    private function naikMotor()
    {
        echo "Berangkat ke stasiun naik motor,\n";
    }

    private function naikMobil()
    {
        echo "bisa Berangkat ke stasiun naik mobil\n";
    }

    private function naikSepeda()
    {
        echo "dan juga Berangkat ke stasiun bisa naik sepeda.\n";
    }
}
?>
