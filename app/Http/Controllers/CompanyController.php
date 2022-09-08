<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use App\Models\Salary;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyController extends Controller
{
    //
    public function index(): AnonymousResourceCollection
    {
        $companies = Company::all();

        return JsonResource::collection($companies);
    }

    public function show(Company $company): AnonymousResourceCollection
    {
        $employees = Employee::query()->where('company_id','=',$company->id)->get();

        return JsonResource::collection($employees);
    }

    public function companyAverageSalary(Company $company): object
    {
        $counter = 0;
        $avg_salaries = 0;
        $employees = Employee::query()->where('company_id','=',$company->id)->get();
        for($i=0;$i<count($employees);$i++){
            $salaries = Salary::query()->where('employee_id','=',$employees[$i]->id)->get();
            $avg_salaries += $salaries->sum('salary_amount');
            $counter+=count($salaries);
        }
        return (object) array( "Average Salary " => $avg_salaries/$counter);
    }

}
