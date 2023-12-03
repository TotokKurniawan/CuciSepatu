<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bayar extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ['gambar', 'code_order'];

    public function order(){
        return $this->hasMany(Order::class);
    }
}