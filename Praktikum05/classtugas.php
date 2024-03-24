<?php

class HasilNilai
{
    public $nim, $mk, $nilai;

    function __construct($nim, $mk, $nilai)
    {
        $this->nim = $nim;
        $this->mk = $mk;
        $this->nilai = $nilai;
    }

    public function hasilUjian()
    {
        $nilai = $this->nilai;
        if ($nilai > 90) {
            return "A";
        } elseif ($nilai >= 80 && $nilai <= 90) {
            return "B";
        } elseif ($nilai >= 75 && $nilai < 80) {
            return "C";
        }
    }

    public function grade()
    {
        $nilai = $this->nilai;
        if ($nilai > 90) {
            return "Lulus";
        } elseif ($nilai >= 80 && $nilai <= 90) {
            return "Good Job";
        } elseif ($nilai >= 75 && $nilai < 80) {
            return "Cukup";
        } else {
            return "Tidak Lulus";
        }
    }
}

$ujian = new HasilNilai("0110223062", "Pemrograman Web", "100");

echo "<h2>Form Nilai Ujian</h2>";
echo "<p>Nim: " . $ujian->nim . "</p>";
echo "<p>Pilih MK: " . $ujian->mk . "</p>";
echo "<p>Nilai: " . $ujian->nilai . "</p>";
echo "<p>Hasil Ujian: " . $ujian->hasilUjian() . "</p>";
echo "<p>Grade: " . $ujian->grade() . "</p>";
?>
