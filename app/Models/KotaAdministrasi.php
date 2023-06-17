<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KotaAdministrasi extends Model
{
    use HasFactory;

    protected $table = 'kota_administrasi';

    protected $guarded = [];

    public $timestamps = FALSE;
}
