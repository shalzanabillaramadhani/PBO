<?php
class Pegawai {
    public string $nama;
    public string $nip;

    public function __construct(string $nama, string $nip) {
        $this->nama = $nama;
        $this->nip = $nip;
    }

    public function tampilData(): void {
        echo "Nama: $this->nama <br>NIP: $this->nip <br>";
    }
}