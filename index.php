<?php
require_once 'Lingkaran.php';

$lingkaran1 = new Lingkaran(10);
$lingkaran2 = new Lingkaran(4);

echo "Luas Lingkaran 1: " . $lingkaran1->hitungLuas() . "<br>";
echo "Luas Lingkaran 2: " . $lingkaran2->hitungLuas() . "<br>";