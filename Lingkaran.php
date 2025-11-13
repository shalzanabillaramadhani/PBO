<?php
class Lingkaran {
    public float $jariJari;
    public const PHI = 3.14;

    public function __construct(float $r) {
        $this->jariJari = $r;
    }

    public function hitungLuas(): float {
        return self::PHI * $this->jariJari ** 2;
    }
}