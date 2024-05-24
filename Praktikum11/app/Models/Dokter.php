<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $table = "dokters"; //nama table yang digunakan

    //kolom yang digunakan di tabel pasien
    protected $fillable = [
        'nama',
        'gender',
        'tmp_lahir',
        'tgl_lahir',
        'kategori',
        'telpon',
        'alamat',
    ];
}
