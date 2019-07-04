<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wisata;

class WisataController extends Controller
{
    public function index()
   {
   	$data = Wisata::all();
    return view('wisata.index', compact('data'));
   }

   public function create()
   {
   	return 'Form disumbit';
   }

}