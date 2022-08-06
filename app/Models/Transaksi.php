<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_transaksi';

    protected $fillable =
    [
        'id_user',
        'alamat',
        'jumlah_ac',
        'type_rumah',
        'nomor_hp',
        'id_layanan',
        'biaya_jasa',
        'penerima_layanan',
        'metode_pembayaran',
        'bukti_pembayaran',
        'status',
        'updated_by',
        'tanggal_kedatangan',
        'waktu_kedatangan'
    ];

    public function User()
    {
        return $this->belongsTo(User::class,'id_user');
    }

    public function Layanan()
    {
        return $this->belongsTo(Layanan::class,'id_layanan');

    }
}
