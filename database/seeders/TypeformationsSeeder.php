<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TypeformationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('typeformations')->insert(
            [
                ['name'=>'Coding School 1'],
                ['name'=>'Marketing Lab 1'],
                ['name'=>'Coding School 2'],
                ['name'=>'Marketing Lab 2'],
                ['name'=>'Coding School 3'],
                ['name'=>'Marketing Lab 3'],
                ['name'=>'Coding School 4'],
                ['name'=>'Marketing Lab 4'],
                ['name'=>'Coding School 5'],
                ['name'=>'Marketing Lab 5'],
            ]
                    
        );
    }
}
