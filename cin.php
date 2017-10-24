<?php

require_once 'orang.php';

$orang = new orang ('rully','bandung','xi-rpl 1','belum menikah');

echo"nama =".$orang->get_nama()."<br>";
echo"tempat =".$orang->get_tempat()."<br>";
echo"kelas =".$orang->get_kelas()."<br>";
echo"status =".$orang->get_status()."<br>";

?>