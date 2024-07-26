<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tlight extends Model
{
    use HasFactory;

    protected $table = 'tlight';
    protected $primaryKey = 'tlight_id';
    public $timestamps = false;

    protected $fillable = [
        'jenis', 'jenisapill', 'titikapill', 'kondisiapill',
        'tahun', 'keterangan', 'lokasi', 'dokumentasi'
    ];
}