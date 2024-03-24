<?php

class Mahasiswa
{
    public $namamahasiswa, $nim, $domisili, $prodi, $ipk;

    function __construct($namamahasiswa, $nim, $domisili, $prodi, $ipk)
    {
        $this->namamahasiswa = $namamahasiswa;
        $this->nim = $nim;
        $this->domisili = $domisili;
        $this->prodi = $prodi;
        $this->ipk = $ipk;
    }

    function setPredikatIPK($ipk)
    {
        if ($ipk > 3.5) {
            echo "Cumlaude";
        } else {
            echo "You did a great job!";
        }
    }
}

$mahasiswa = new Mahasiswa ("Putri Nur Febrianti", "0110223062", "Jakarta", "TI", "4.00");
echo "Nama Lengkap :" . $mahasiswa ->namamahasiswa;
echo "<br>";
echo "Nim :" . $mahasiswa ->nim;
echo "<br>";
echo "Domisili :" .  $mahasiswa ->domisili;
echo "<br>";
echo "Program Studi :" . $mahasiswa ->prodi;
echo "<br>";
echo "IPK :" . $mahasiswa ->ipk;
echo "<br>";
$mahasiswa->setPredikatIPK($mahasiswa->ipk);
?>