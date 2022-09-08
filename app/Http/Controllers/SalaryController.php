<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Salary;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class SalaryController extends Controller
{
    //

    public function index(): AnonymousResourceCollection
    {
        $salaries = Salary::all();

        return JsonResource::collection($salaries);
    }

    public function companyAverageSalary(Company $company): JsonResource
    {
        $employees = Salary::query()
            ->join('employees','employees.id','=','salaries.employee_id')
            ->where('company_id', '=', $company->id)
            ->average('salary_amount');

        return JsonResource::make(collect(number_format((float)$employees, 2)));
    }

}
