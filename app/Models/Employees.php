<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
	protected $fillable = ['id', 'name', 'last_name', 'areas', 'state'];
}
