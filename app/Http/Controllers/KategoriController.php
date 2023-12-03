<?php

namespace App\Http\Controllers;

use App\Models\Packet;
use Illuminate\Http\Request;
 
class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kategori',[
            'title' => 'Packet',
            'packets' => Packet::latest()->get()
        ]);
    }

}