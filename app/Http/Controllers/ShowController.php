<?php

namespace App\Http\Controllers;

use App\Models\Packet;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index(Packet $packet)
    {
        return view('packet',[
            'title' => 'Detail Paket',
            'packet' => $packet
        ]);
    }

}