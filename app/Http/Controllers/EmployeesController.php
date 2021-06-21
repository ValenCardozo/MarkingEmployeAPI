<?php

namespace App\Http\Controllers;

use App\Dtos\EmployeeDto;
use App\Http\Controllers\Controller;
use App\Markings;
use App\Models\Employees;
use Illuminate\Http\Request;


class EmployeesController extends Controller
{
    public function __construct(Employees $employeesModel)
    {
        $this->employee = $employeesModel;
    }

    public function createEmployee(Request $request): void
    {
        $employeeDto =  new EmployeeDto($request->header());

        $result = $this->employee->createEmployee($employeeDto);

        echo json_encode($result);
    }

    private function getEmployee(): void
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
