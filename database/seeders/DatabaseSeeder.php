<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Identity;
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
        // \App\Models\User::factory(10)->create();
        Identity::factory(1)->create([
            'firstName' => 'Loren',
            'lastName' =>'Craciun',
            'address' => '32 Allée Bayeux',
            'city' => 'Rouen',
            'zip_code' => '76000',
            'tel' => '0780173797',
            'email' => 'lorenalexandru14@gmail.com',
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
