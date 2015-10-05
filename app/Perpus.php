<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perpus extends Model
{
    //
    protected $table = 'perpus';
	protected $fillable =  array('judul' , 'isi' );
	protected $dates = ['deleted_at'];
}
