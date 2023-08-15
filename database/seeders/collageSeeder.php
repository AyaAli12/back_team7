<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class collageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('collages')->insert([
            ['name'=>'IT Engeneering',
            'logo'=>'/logo',
            'category_id'=>'3',
            'uuid'=>Str::uuid()
        ],
        ['name'=>'Dental',
        'logo'=>'/logo',
        'category_id'=>'4',
        'uuid'=>Str::uuid()
        ]
        ]);
    }
}
