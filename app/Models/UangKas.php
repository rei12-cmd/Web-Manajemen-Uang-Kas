<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class uangkas extends Model
{
    use HasFactory;

    protected $table = 'uangkas';

    protected $fillable = ['nama_siswa', 'tgl_bayar', 'jumlah_bayar'];
}
