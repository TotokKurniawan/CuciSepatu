<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Packet extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ['name', 'gambar', 'code_packet', 'unit', 'price','desc'];

    public function order(){
        return $this->hasMany(Order::class);
    }
}