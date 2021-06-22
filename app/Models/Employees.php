<?php

namespace App\Models;

use App\Dtos\EmployeeDto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Employees extends Model
{
	protected $table = 'employees';

	protected $primaryKey = 'id';

	final public function createEmployee(EmployeeDto $employeeDto): bool
	{
		$employee = new Employees;

		$employee->name      = $employeeDto->name;
		$employee->last_name = $employeeDto->lastName;
		$employee->areas     = $employeeDto->areas;
		$employee->state     = $employeeDto->state;

		return $employee->save();
	}

	final public function getEmployee($employeeId): type
	{
		dd($employeeId);
		$query = $this->select('*')
						->where('employee.id', '=', $employeeId);

		return $query->first();
	}

	final public function deleteEmployee(): type
	{

	}
}
