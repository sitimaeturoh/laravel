<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
	protected $table = 'wisata';
	protected $fillable = ['nama_wisata','deskripsi wisata','gambar_wisata'];
    // $data_wisata =\App\Wisata::all();
    // return view('wisata.index'['data_wisata' => $data_wisata]);
}
