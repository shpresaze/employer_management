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

    public function show(Employee $employee): array
    {
        $salaries = Salary::query()->where('employee_id','=',$employee->id)->get();

        $avg_salaries = (object) array( "Average Salary " => $salaries->avg('salary_amount'));

        return [JsonResource::collection($salaries), $avg_salaries];
    }
}
