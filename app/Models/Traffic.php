<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traffic extends Model
{
    use HasFactory;

    protected $table = 'traffic';
    protected $primaryKey = 'traffic_id';
    public $timestamps = false;

    protected $fillable = [
        'jenis_traffic',
        'namajalan',
        'statusjalan',
        'kapasitasjalan',
        'volumelalulintas',
        'kondisijalan',
        'lebarjalan',
        'keterangan',
        'lokasi',
        'dokumentasi'
    ];
}