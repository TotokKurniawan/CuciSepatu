<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Packet;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

public function index()
    {
        return view('order',[
            'users' => User::latest()->get(),
            'packets' => Packet::latest()->get()
        ]);
    }
     
    public function store(Order $order)
    {
        $validasi = $request->validate([
            'customer_name' => 'required',
            'no_hp' => 'required',
            'packet_id' => 'required',
            'weight' => 'required|integer',
            'address' => 'required',
            'desc' => 'required',
            'status' => 'required'
        ]);

        $validasi['order_code'] = random_int(100000000,999999999);

        $price = Packet::find($validasi['packet_id']);
        $validasi['price'] = $price->price * $validasi['weight'];

        Order::create($validasi);

        return redirect('/home')->with('success','Orderan berhasil ditambahkan');
    }
}