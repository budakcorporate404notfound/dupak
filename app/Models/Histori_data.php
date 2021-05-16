<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Histori_data extends Model
{
    use HasFactory;

    protected $table = "Histori_data";
    protected $fillable = ['user_id', 'data_id', 'verifikator', 'hasil_verifikator', 'keterangan'];

    public function Data()
    {
        return $this->belongsTo('App\Models\Data');
    }
}