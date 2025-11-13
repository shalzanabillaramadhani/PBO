<?php
class PersegiPanjang {
    public float $panjang;
    public float $lebar;

    public function __construct(float $p, float $l) {
        $this->panjang = $p;
        $this->lebar = $l;
    }

    public function hitungLuas(): float {
        return $this->panjang * $this->lebar;
    }

    public static function info(): void {
        echo "Class PersegiPanjang untuk menghitung luas dan keliling persegi panjang.<br>";
    }
}