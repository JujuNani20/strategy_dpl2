<?php // phpcs:ignore Internal.Exception

abstract class HewanStrategi {
    private $strategiBergerak;

    public function setStrategiBergerak(StrategiBergerak $strategiBergerak) {
        $this->strategiBergerak = $strategiBergerak;
    }

    abstract public function tampilkan();

    public function bergerak() {
        if ($this->strategiBergerak != null) {
            $this->strategiBergerak->bergerak();
        } else {
            echo "Strategi bergerak belum diset\n";
        }
    }
}
?>
