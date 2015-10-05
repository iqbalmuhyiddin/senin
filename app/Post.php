<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{	
	use SoftDeletes;
	protected $table = 'post';
	protected $fillable =  array('judul' , 'isi' );
	protected $dates = ['deleted_at'];
}
