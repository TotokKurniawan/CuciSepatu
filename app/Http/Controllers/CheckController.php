<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Packet;
use Illuminate\Http\Request;

class CheckController extends Controller
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
    public function index(Order $order)
    {
        return view('check',[
            'title' => 'Order',
            'users' => User::latest()->get(),
            'orders' => Order::latest()->get()
        ]);
    }
}