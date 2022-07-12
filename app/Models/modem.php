<?php

namespace App\Models;

use App\Http\Controllers\ModemKeluarController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modem extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'qty'
    ];

    public function masuk()
    {
        return $this->hashMany(modemmasuk::class);
    }
    public function keluar()
    {
        return $this->hashMany(modemkeluar::class);
    }
}
