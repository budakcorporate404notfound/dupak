<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $table = "data";
    protected $fillable = ['lu_administrasi', 'lu_buktifisik', 'user_id', 'keterangan'];

    public function User()
    {
        return $this->belongsTo('App\Models\User');
        return $this->hasMany('App\Models\Histori_data');
    }
}