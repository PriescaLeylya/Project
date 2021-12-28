<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class Pelanggan extends Model
{
    use HasFactory;
 
    protected $fillable = [ 'tour_id','nama','jenis_kelamin', 'phone_number', 'alamat','tanggal_booking'];

    public function tourtravels(){
        return $this->belongsTo(Tourtravel::class,'tour_id');
    }
}
