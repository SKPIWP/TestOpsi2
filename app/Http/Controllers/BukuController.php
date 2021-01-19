<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
    {
    	$buku = Buku::all();
    	return view('home', compact('buku'));
    }
}
