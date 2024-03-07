<?php

function tambah($nilai1, $nilai2)
{
    echo $nilai1 + $nilai2;
}

tambah(1, 2);
echo"<br>";

function hitungUmur($tahunLhair) 
{
    $tahunSekarang = 2024;

    $hasil = $tahunSekarang - $tahunLhair;
    echo $hasil;
}

hitungUmur(2005);