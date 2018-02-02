<?php

namespace Bantenprov\DDGuru\Models\Bantenprov\DDGuru;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DDGuru extends Model
{

    protected $table = 'dd_gurus';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('negara', 'province_id', 'kab_kota', 'regency_id', 'tahun', 'data');

    public function getProvince()
    {
        return $this->hasOne('Bantenprov\DDGuru\Models\Bantenprov\DDGuru\Province','id','province_id');
    }

    public function getRegency()
    {
        return $this->hasOne('Bantenprov\DDGuru\Models\Bantenprov\DDGuru\Regency','id','regency_id');
    }

}

