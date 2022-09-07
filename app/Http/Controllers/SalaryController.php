<?php

namespace App\Http\Controllers;

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

}
