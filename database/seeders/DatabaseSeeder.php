<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        Listing::factory(6)->create();

        // Listing::create([
        //     'title' => 'laravel programmer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'data4u',
        //     'location' => 'prague',
        //     'email' => 'email1@email.com',
        //     'website' => 'https://www.data4u.com',
        //     'description' => 'lorem ipsum'
        // ]);

        // Listing::create([
        //     'title' => 'js programmer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'stark industries',
        //     'location' => 'warsaw',
        //     'email' => 'email2@email.com',
        //     'website' => 'https://www.start-industries.com',
        //     'description' => 'lorem ipsum dolor sit'
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
