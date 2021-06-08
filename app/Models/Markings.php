<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Markings extends Model
{
	protected $fillable = ['id', 'marking_employee', 'marking_date', 'marking_in', 'marking_out'];
}
