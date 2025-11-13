<?php
require_once 'Manager.php';

$pegawai1 = new Pegawai("Rani", "12345");
$pegawai1->tampilData();

echo "<hr>";

$manager1 = new Manager("Andi", "98765", 2500000);
$manager1->tampilData();