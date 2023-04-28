<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingModel extends Model
{
    protected $table = "tbl_setting";
    protected $fillable = [
        'kd_setting',
        'nama',
        'keterangan',
        'nilai'
    ];
    public $timestamps = false;

}
