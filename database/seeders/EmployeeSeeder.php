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
        $company = Company::query()->find(1);
        $company->employees()->createMany([
            [
                'name' => 'Jordancho',
                'surname' => 'Evtimov',
                'social_security' => '1231231231231',
                'address' => "Kocani"
            ],
            [
                'name' => 'Martin',
                'surname' => 'Bojmaliev',
                'social_security' => '4564564564564',
                'address' => "Kocani"
            ],
            [
                'name' => 'Shpresa',
                'surname' => 'Zendeli',
                'social_security' => '30303030303030',
                'address' => "Skopje"
            ],

        ]);
    }
}
