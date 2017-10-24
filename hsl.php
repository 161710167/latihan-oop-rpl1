<?php
require_once 'hasil.php';

echo "========================="."<br>";
echo "Perhitungan bilangan 21 dengan 3"."<br>";
echo "========================="."<br>";

$tambah = new penjumlahan;
$tambah ->set_nilai(21,3);
echo "Hasil penjumlahan = " .$tambah->get_nilai1().'<br>';

$kurang = new penjumlahan;
$kurang ->set_nilai(21,3);
echo "Hasil pengurangan= " .$kurang->get_nilai2().'<br>';

$kali = new penjumlahan;
$kali ->set_nilai(21,3);
echo "Hasil perkalian = " .$kali->get_nilai3().'<br>';

$bagi = new penjumlahan;
$bagi ->set_nilai(21,3);
echo "Hasil pembagian = " .$bagi->get_nilai4().'<br>';
?>