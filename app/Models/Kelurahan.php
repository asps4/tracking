<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;

    protected $fillable = ['kode_kelurahan','nama_kelurahan','id_rw'];
    public $timestamps = true; 

    public function kecamatan(){
        return $this->belongsTo('App\Models\Kecamatan', 'id_kecamatan');
    }

    public function rw(){
        return $this->hasMany('App\Models\Rw', 'id_rw');
    }

    
}
