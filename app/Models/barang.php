<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'qty'
    ];

    public function masuk()
    {
        return $this->hashMany(masuk::class);
    }
    public function keluar()
    {
        return $this->hashMany(keluar::class);
    }
}
