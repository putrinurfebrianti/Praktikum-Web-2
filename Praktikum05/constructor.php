<?php

class Kendaraan
{
    public $nama;
    public $warna;
    public $tempatOperasi;
    
    function __construct($nama, $warna, $tempatOperasi) //construct untuk mengisi properti yang masih kosong (note: gunakan this)
    {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->tempatOperasi = $tempatOperasi;
    }

}

//panggil class kendaraan dengan mengisi parameternya
$kendaraan = new Kendaraan("mobil", "biru", "darat");
echo $kendaraan ->nama;
echo "<br>";
echo $kendaraan ->warna;
echo "<br>";
echo $kendaraan ->tempatOperasi;
echo "<br>";

?>