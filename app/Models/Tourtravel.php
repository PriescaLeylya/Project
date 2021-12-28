<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tourtravel extends Model
{
    use HasFactory;
    protected $table = 'tourtravels';  
    protected $fillable = ['id', 'Tujuan','photo','Destinasi', 'Harga'];

    public function pelanggans(){
        return $this->hasMany(Pelanggan::class);
    }
}
