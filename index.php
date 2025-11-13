<?php
require_once 'PersegiPanjang.php';

PersegiPanjang::info();

$kotak1 = new PersegiPanjang(10, 5);
$kotak2 = new PersegiPanjang(7, 3);

echo "Luas Persegi Panjang 1: " . $kotak1->hitungLuas() . "<br>";
echo "Luas Persegi Panjang 2: " . $kotak2->hitungLuas() . "<br>";