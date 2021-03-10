<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call('AuthorSeeder');
        DB::table('authors')->insert([
            'name' => Str::random(10),
            'gender' => Str::random(10),
            'country' => Str::random(10),
        ]);

        DB::table('authors')->insert([
            'name' => 'Arturo Cabrera',
            'gender' => 'Male',
            'country' => 'Ecuador',
        ]);

        DB::table('authors')->insert([
            'name' => 'Adrian Cabrera',
            'gender' => 'Male',
            'country' => 'Venezuela',
        ]);

        DB::table('authors')->insert([
            'name' => 'Dayanara Arellano',
            'gender' => 'Female',
            'country' => 'Ecuador',
        ]);
    }
}
