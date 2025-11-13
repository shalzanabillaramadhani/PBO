<?php
class Mahasiswa {
    public string $nama;
    public string $nim;

    public function __construct(string $nama, string $nim) {
        $this->nama = $nama;
        $this->nim = $nim;
        echo "Objek Mahasiswa dibuat untuk $this->nama<br>";
    }

    public function tampilData(): void {
        echo "Nama: $this->nama <br>NIM: $this->nim <br>";
    }

    public function __destruct() {
        echo "Objek Mahasiswa $this->nama dihapus.<br>";
    }
}