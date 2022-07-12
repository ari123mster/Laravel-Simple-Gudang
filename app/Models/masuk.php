<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class masuk extends Model
{
    use HasFactory;
    protected $fillable = [
        'barang_id', 'qty', 'tgl_masuk'
    ];
    public function barang()
    {
        return $this->belongsTo(barang::class);
    }
}
