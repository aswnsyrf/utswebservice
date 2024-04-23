<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Mahasiswa extends Model
{
    use HasFactory;
    // use SoftDeletes;

    protected $table        = 'mahasiswa';

    protected $fillable     = [
        'id',
        'NIM',
        'nama_mahasiswa',
    ];

    // protected $hidden       = ['created_at', 'updated_at', 'deleted_at'];

    protected function serializeDate($date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    // public function province() {
    //     return $this->belongsTo(Mahasiswa::class, 'province_id', 'province_id');
    // }
}
