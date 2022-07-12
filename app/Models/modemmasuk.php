<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modemmasuk extends Model
{
    use HasFactory;
    protected $fillable = [
        'modem_id', 'qty', 'tgl_masuk'
    ];
    public function modem()
    {
        return $this->belongsTo(modem::class);
    }
}
