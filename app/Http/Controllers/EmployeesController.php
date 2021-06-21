<?php

namespace App\Http\Controllers;

use App\Employees;
use App\Http\Controllers\Controller;
use App\Http\Request;
use App\Markings;
use App\Models\Employees;
use Illuminate\Http\Request;


class EmployeesController extends Controller
{
    public function __construct()
    {
        $this->employee = new Employees;
    }

    private function createEmployee(): void
    {
        $params = [
            'name'      => 'test',
            'last_name' => '1',
            'area'      => 'tech'

        ];

        $this->employee->storeEmployee($params);

        return '200';

    }

    private function getEmployee(): type
    {

    }

    private function listEmployee(): type
    {

    }

    private function updateEmployeeMarkingIn(): type
    {

    }

    private function updateEmployeeMarkingOut(): type
    {

    }

    private function deleteEmployee(): type
    {

    }
}
