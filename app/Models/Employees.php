<?php

namespace App\Models;

use App\Dtos\EmployeeDto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Employees extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $table = 'employees';

	final public function createEmployee(EmployeeDto $employeeDto): bool
	{
		$employee = new Employees;

		$employee->name      = $employeeDto->name;
		$employee->last_name = $employeeDto->lastName;
		$employee->areas     = $employeeDto->areas;
		$employee->state     = $employeeDto->state;

		return $employee->save();
	}

	final public function getEmployee(): type
	{

	}

	final public function deleteEmployee(): type
	{

	}
}
