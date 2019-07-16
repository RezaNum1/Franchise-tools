<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'owner_id' => '2',
            'name' => 'Ayam Goreng',
            'address' => 'Jl.Ayam',
            'phone' => '22392834',
            'npwp' => '3848232',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]); 
        DB::table('brands')->insert([
            'owner_id' => '1',
            'name' => 'Ayam Goreng',
            'address' => 'Jl.Ayam',
            'phone' => '22392834',
            'npwp' => '3848232',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]); 
   }
}
