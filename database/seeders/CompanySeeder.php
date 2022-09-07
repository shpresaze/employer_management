<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Company::query()->create([
            'name' => 'DigitalHub',
            'address' => 'Kocani, Macedonia',
        ]);
        Company::query()->create([
            'name' => 'BikeComputer',
            'address' => 'Kocani, Macedonia',
        ]);
    }
}
