<?php

class bmiPasien
{
    public $nama, $berat, $tinggi, $umur, $jk;

    function __construct($nama, $berat, $tinggi, $umur, $jk)
    {
        $this->nama = $nama;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
        $this->umur = $umur;
        $this->jk = $jk;
    }

    public function hasilBMI()
    {
        $tinggi_m = $this->tinggi / 100;
        $bmi = $this->berat / ($tinggi_m * $tinggi_m);
        return round($bmi, 2);
    }

    public function statusBMI()
    {
        $bmi = $this->hasilBMI();
        if ($bmi < 18.5) {
            return "Kekurangan berat badan";
        } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
            return "Berat badan normal";
        } elseif ($bmi >= 25 && $bmi <= 29.9) {
            return "Kelebihan berat badan";
        } else {
            return "Obesitas";
        }
    }
}

$pasien = new bmiPasien("Putri nur febrianti", "43", "145", "19", "Perempuan");

            echo "<h2>Hasil BMI Pasien</h2>";
            echo "<p>Nama: " . $pasien->nama . "</p>";
            echo "<p>Berat: " . $pasien->berat . " kg</p>";
            echo "<p>Tinggi: " . $pasien->tinggi . " cm</p>";
            echo "<p>Umur: " . $pasien->umur . " tahun</p>";
            echo "<p>Jenis Kelamin: " . $pasien->jk . "</p>";
            echo "<p>Hasil BMI: " . $pasien->hasilBMI() . "</p>";
            echo "<p>Status BMI: " . $pasien->statusBMI() . "</p>";