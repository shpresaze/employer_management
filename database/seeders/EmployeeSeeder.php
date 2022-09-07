<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Employee::create([
            'name_surname' => 'Jordancho Evtimov',
            'embg' => '1231231231231',
            'company_id' => "2"
        ]);
        Employee::create([
            'name_surname' => 'Martin Bojmaliev',
            'embg' => '4564564564564',
            'company_id' => "1"
        ]);
        Employee::create([
            'name_surname' => 'Ivan Ivanovski',
            'embg' => '7897897897897',
            'company_id' => "2"
        ]);
    }
}
