<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Salary;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;
use PhpParser\Node\Expr\Cast\Object_;
use function Sodium\add;

class EmployeeController extends Controller
{
    //

    public function index(): AnonymousResourceCollection
    {
        $employees = Employee::all();

        return JsonResource::collection($employees);
    }

    public function show(Employee $employee): AnonymousResourceCollection
    {
        $salaries = Salary::query()->where('employee_id','=',$employee->id)->get();

        return JsonResource::collection($salaries);
    }

    public function employeeAverageSalary(Employee $employee): JsonResource
    {
        $salaries = Salary::query()->where('employee_id','=',$employee->id)->average('salary_amount') ;

        return JsonResource::make(collect(number_format((float)( $salaries), 2)));
    }
}
