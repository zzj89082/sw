<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Poster extends Model
{
	use SoftDeletes;
	protected $dates = ['deleted_at'];
	
	public $table = 'sw_poster';
	public $primaryKey = 'POid';
}
