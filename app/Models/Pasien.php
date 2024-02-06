<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pasien',
        'jenis_kelamin',
        'hb',
        'mch',
        'mchc',
        'mcv',
        'status',

    ];


    protected function status(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => $value ? 'Anemia' : 'Tidak Anemia',
        );
    }
}
