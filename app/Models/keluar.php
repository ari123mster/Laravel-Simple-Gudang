<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keluar extends Model
{
    use HasFactory;
    protected $fillable = [
        'barang_id', 'qty', 'team', 'tgl_keluar', 'keterangan'
    ];
    public function barang()
    {
        return $this->belongsTo(barang::class);
    }
}
