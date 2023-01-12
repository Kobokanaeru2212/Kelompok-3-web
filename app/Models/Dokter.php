<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $table = 'dokters';
    protected $guarded = ['id'];

    public function pasien(){
        return $this->hasMany(Pasien::class,'dokter_id','id');
    }
}
