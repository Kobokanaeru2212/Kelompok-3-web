<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'pasien';
    protected $guarded = ['id'];

    public function dokter(){
        return $this->belongsTo(Dokter::class, 'dokter_id', 'id');
    }
}
