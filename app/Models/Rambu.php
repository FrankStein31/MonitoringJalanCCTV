<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rambu extends Model
{
    use HasFactory;

    protected $table = 'rambu';
    protected $primaryKey = 'rambu_id';
    public $timestamps = false;

    protected $fillable = [
        'jenis', 'namarambu', 'jenisrambu', 'titikrambu', 'kondisirambu',
        'tahun', 'keterangan', 'lokasi', 'dokumentasi'
    ];
}