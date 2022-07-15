<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Str;

class EmployeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<=100; $i++){
            DB::table('employes')->insert([
                'first_name' => 'employe_first_name' . $i+1,
                'last_name' => Str::random(25),
                'company_id' => random_int(1, 100),
                'email' => 'employe_name' . $i+1 . '@gmail.com',
                'phone' => random_int(1000000, 9999999999),
            ]);
        }
    }
}
