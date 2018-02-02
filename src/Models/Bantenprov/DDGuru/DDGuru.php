<?php

namespace App\Models\Bantenprov\AngkaHarapanHidup;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AngkaHarapanHidup extends Model 
{

    protected $table = 'angka_harapan_hidups';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('negara', 'province_id', 'kab_kota', 'regency_id', 'tahun', 'data');

}