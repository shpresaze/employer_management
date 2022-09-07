<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Salary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Salary::create([
            'salary_amount' => '2000',
            'date_payment' => '30.06.2022',
            'employee_id' => "1"
        ]);

        Salary::create([
            'salary_amount' => '1000',
            'date_payment' => '12.07.2022',
            'employee_id' => "2"
        ]);

        Salary::create([
            'salary_amount' => '1500',
            'date_payment' => '28.08.2022',
            'employee_id' => "3"
        ]);
    }
}
