<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categories')->insert([
        ['name'=>'Medical','logo'=>'/logo','uuid'=>Str::uuid()],
        ['name'=>'Engineering','logo'=>'/logo','uuid'=>Str::uuid()]
      ]) ; 
    }
}
