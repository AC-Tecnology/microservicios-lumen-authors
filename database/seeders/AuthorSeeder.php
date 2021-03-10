<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Author::class, 50)->create();
        Author::factory()
        	->count(50)
        	->create();
    }
}
