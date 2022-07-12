<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modemkeluar extends Model
{
    use HasFactory;
    protected $fillable = [
        'modem_id', 'qty', 'team', 'sn', 'tgl_keluar', 'keterangan'
    ];
    public function modem()
    {
        return $this->belongsTo(modem::class);
    }
}
