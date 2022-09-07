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
        $emoloyee1 = Employee::query()->find(1);
        $emoloyee1->salaries()->createMany([
            [
                'salary_amount' => '2000',
                'date_payment' => '30.06.2022'
            ],
            [
                'salary_amount' => '1000',
                'date_payment' => '12.07.2022',
            ],
            [
                'salary_amount' => '1500',
                'date_payment' => '28.08.2022',
            ],

        ]);

        $emoloyee2 = Employee::query()->find(2);
        $emoloyee2->salaries()->createMany([
            [
                'salary_amount' => '2050',
                'date_payment' => '29.06.2022'
            ],
            [
                'salary_amount' => '1010',
                'date_payment' => '10.07.2022',
            ],
            [
                'salary_amount' => '1560',
                'date_payment' => '30.08.2022',
            ],

        ]);

        $emoloyee3 = Employee::query()->find(3);
        $emoloyee3->salaries()->createMany([
            [
                'salary_amount' => '200',
                'date_payment' => '19.06.2022'
            ],
            [
                'salary_amount' => '100',
                'date_payment' => '15.07.2022',
            ],
            [
                'salary_amount' => '150',
                'date_payment' => '25.08.2022',
            ],

        ]);
    }
}
