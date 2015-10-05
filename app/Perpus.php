<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perpus extends Model
{
    //
    protected $table = 'perpus';
	protected $fillable =  array('judul' , 'pengarang', 'penerbit', 'tahun', 'kota', 'deskripsi');
	
}
