<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<=100; $i++){
            DB::table('companies')->insert([
                'name' => 'company' . $i+1,

                'email' => 'company' . $i+1 . '@gmail.com',
                'website' => 'www.company' . $i+1 . '.com'

            ]);
        }
    }
}
