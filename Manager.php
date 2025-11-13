<?php
require_once 'Pegawai.php';

class Manager extends Pegawai {
    public float $tunjangan;

    public function __construct(string $nama, string $nip, float $tunjangan) {
        parent::__construct($nama, $nip); // panggil constructor Pegawai
        $this->tunjangan = $tunjangan;
    }

    public function tampilData(): void {
        parent::tampilData(); // panggil method dari Pegawai
        echo "Tunjangan: Rp" . number_format($this->tunjangan, 0, ',', '.') . "<br>";
    }
}