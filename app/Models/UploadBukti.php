<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadBukti extends Model
{
    // use HasFactory;
    protected $table        = 'upload_bukti_bayar';
    protected $primaryKey   = 'id';
    protected $fillable     = [
        'id',
        'nop',
        'nama_subjek',
        'nama_pengirim',
        'no_hp',
        'foto_bukti_bayar',
        'tanggal',
        'status',
        'created_at',
        'updated_at'
    ];
}
