<?php

namespace App\Dtos;

class EmployeeDto
{
	public $name;

	public $lastName;

	public $areas;

	public $state;

	public function __construct(array $params)
	{
		$this->name     = $params['name'][0];
		$this->lastName = $params['lastname'][0];
		$this->areas    = $params['areas'][0];
		$this->state    = $params['state'][0];
	}
}
