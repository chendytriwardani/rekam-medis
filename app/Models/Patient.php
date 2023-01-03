<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $table = 'patients';
    protected $fillable = [
        'id_pasien',
        'no_bpjs',
        'nama',
        'jenis_kelamin',
        'tgl_lahir',
        'tempat_lahir',
        'alamat',
        'no_hp',
        'berat_badan',
        'tinggi_badan',
    ];

    // protected $guarded = [''];
    
    // protected $primaryKey = 'id_pasien';
    // protected $keyType = 'char';
    // public $incrementing = false;

    // public function getRouteKeyName()
    // {
    //     return 'id_pasien';
    // }
}
