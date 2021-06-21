<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $table = 'employees';

	final public function storeEmployee($request): type
	{
		$employee = new Employees;

		$employee->name      = $request->name;
		$employee->last_name = $request->last_name;
		$employee->areas     = $request->areas;
		$employee->state     = $request->state;

		$employee->save();
	}
}
