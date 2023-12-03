<?php

namespace App\Models;

use App\Models\Bayar;
use App\Models\Packet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function packet(){
        return $this->belongsTo(Packet::class);
    }
    public function bayars(){
        return $this->belongsTo(Bayar::class);
    }
}